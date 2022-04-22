<?php

namespace App;

use App\Facades\Img;
use App\Facades\UserCache;
use App\Models\Campaign;
use App\Facades\CampaignLocalization;
use App\Models\Concerns\Filterable;
use App\Models\Concerns\Searchable;
use App\Models\Concerns\Sortable;
use App\Models\Concerns\Tutorial;
use App\Models\Patreon;
use App\Models\Relations\UserRelations;
use App\Models\Scopes\UserScope;
use App\Models\UserSetting;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Laravel\Cashier\Billable;
use Laravel\Passport\HasApiTokens;

/**
 * Class User
 * @package App
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property integer $last_campaign_id
 * @property string $avatar
 * @property string $provider
 * @property integer $provider_id
 * @property string $last_login_at
 * @property integer $welcome_campaign_id
 * @property boolean $newsletter
 * @property boolean $has_last_login_sharing
 * @property string $patreon_pledge
 * @property int $booster_count
 * @property int $referral_id
 * @property Collection $settings
 * @property Collection $profile
 *
 * Virtual (from \App\Models\UserSetting)
 * @property bool $advancedMentions
 * @property bool $defaultNested
 * @property string $campaignSwitcherOrderBy
 * @property string $patreon_fullname
 * @property string $patreon_email
 */
class User extends \Illuminate\Foundation\Auth\User
{
    use Notifiable,
        HasApiTokens,
        UserScope,
        UserRelations,
        UserSetting,
        Searchable,
        Filterable,
        Sortable,
        Billable,
        Tutorial
    ;

    protected static $currentCampaign = false;

    public $additional_attributes = [
        'patreon_fullname',
        //'patreon_email'
    ];

    public $searchableColumns = ['email', 'settings'];
    public $sortableColumns = [];
    public $filterableColumns = ['patreon_pledge', 'referral_id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'last_campaign_id',
        'provider',
        'provider_id',
        'newsletter',
        'timezone',
        'campaign_role',
        'theme',
        'date_format',
        'default_pagination',
        'locale', // Keep this for the LocaleChange middleware
        'last_login_at',
        'has_last_login_sharing',
        'patreon_pledge',
        'referral_id',
        'profile',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'last_login_at',
    ];

    /**
     * Casted variables
     * @var string[]
     */
    protected $casts = [
        'settings' => 'array',
        'tutorial' => 'array',
        'profile' => 'array',
    ];

    /**
     * Get the user's campaign.
     * This is the equivalent of calling user->campaign or user->getCampaign
     * @return Campaign|null
     */
    public function getCampaignAttribute()
    {
        // We use a dirty static system because relying on the last_campaign_id doesn't work when two sessions
        // are active form the same user.
        if (self::$currentCampaign === false) {
            self::$currentCampaign = CampaignLocalization::getCampaign();
        }
        return self::$currentCampaign;
    }

    /**
     * Change the current campaign (when creating a new one)
     * @param Campaign $campaign
     * @return $this
     */
    public function setCurrentCampaign(Campaign $campaign): self
    {
        self::$currentCampaign = $campaign;
        return $this;
    }


    /**
     * Get the other campaigns of the user
     * @param bool $hasEmpty
     * @return array
     */
    public function moveCampaignList(bool $hasEmpty = true): array
    {
        $campaigns = $hasEmpty ? [0 => ''] : [];
        foreach ($this->campaigns()->whereNotIn('campaign_id', [$this->campaign->id])->get() as $campaign) {
            $campaigns[$campaign->id] = $campaign->name;
        }
        return $campaigns;
    }

    /**
     * @param int $size = 40
     * @return string
     */
    public function getAvatarUrl(int $size = 40): string
    {
        if (!empty($this->avatar) && $this->avatar != 'users/default.png') {
            return Img::crop($size, $size)->url($this->avatar);
        } else {
            return '/images/defaults/user.svg';
        }
    }

    /**
     * @param null $campaignId
     * @return mixed
     */
    public function rolesList($campaignId = null): string
    {
        if (empty($campaignId) && !empty($this->campaign)) {
            $campaignId = $this->campaign->id;
        }
        $roles = $this->campaignRoles->where('campaign_id', $campaignId);

        $roleLinks = [];
        foreach($roles as $role) {
            if (auth()->user()->isAdmin()) {
                $roleLinks[] = link_to_route('campaign_roles.show', $role->name, $role->id);
            } else {
                $roleLinks[] = $role->name;
            }
        }
        return (string) implode(', ', $roleLinks);
    }

    public function hasCampaignRole(int $roleId)
    {
        $campaignId = $this->campaign->id;
        $roleIds = $this->campaignRoles->where('campaign_id', $campaignId)->pluck('id')->toArray();

        return in_array($roleId, $roleIds);
    }

    /**
     * Figure out if the user is an admin of the current campaign
     */
    public function isAdmin(): bool
    {
        return UserCache::user($this)->campaign($this->campaign)->admin();
    }

    /**
     * Check if a user has campaigns
     * @return bool
     */
    public function hasCampaigns($count = 0): bool
    {
        return UserCache::user($this)->campaigns()->count() > $count;
    }

    /**
     * Check if the user has other campaigns than the current one
     * @param int $campaignId
     * @return bool
     */
    public function hasOtherCampaigns(int $campaignId): bool
    {
        $campaigns = UserCache::campaigns();
        return $campaigns->where('campaign_id', '<>', $campaignId)->count() > 0;
    }

    /**
     * Get the user's avatar
     * @return string
     */
    public function getAvatar()
    {
        return "<span class=\"entity-image\" style=\"background-image: url('" .
            $this->getAvatarUrl(40) . "');\" title=\"" . e($this->name) . "\"></span>";
    }


    /**
     * Get max file size of user
     * @param bool $readable
     * @return int|string
     */
    public function maxUploadSize($readable = false, $what = 'image')
    {
        $campaign = CampaignLocalization::getCampaign();
        if ($this->isPatron() || ($campaign && $campaign->boosted())) {
            // Elementals get massive upload sizes
            if ($this->isElementalPatreon()) {
                if ($this->id === 34122) {
                    return $readable ? '100MB' : 102400;
                }
                return $readable ? '25MB' : 25600;
            } elseif ($this->isWyvern()) {
                if ($what == 'map') {
                    return $readable ? '20mb' : 20480;
                }
                return $readable ? '15MB' : 15360;
            } elseif ($what == 'map') {
                return $readable ? '10MB' : 10240;
            }
            return $readable ? '8MB' : 8192;
        } elseif ($what == 'map') {
            return $readable ? '3MB' : 3072;
        }
        return $readable ? '1MB' : 2048;
    }

    /**
     * Determine if a user is a patron
     * @return bool
     */
    public function isPatron(): bool
    {
        return $this->hasRole('patreon') || $this->hasRole('admin');
    }

    /**
     * Determine if a user has a patreon-synced set up
     * @return bool
     */
    public function hasPatreonSync(): bool
    {
        return $this->hasRole('patreon') && !empty($this->patreon_email);
    }

    /**
     * Determine if a user is a goblin (deprecated)
     * @return bool
     */
    public function isGoblinPatron(): bool
    {
        return ($this->hasRole('patreon') && !empty($this->patreon_pledge)
                && $this->patreon_pledge != Patreon::PLEDGE_KOBOLD)
            || $this->hasRole('admin');
    }

    /**
     * Determine if a user is an elemental
     * @return bool
     */
    public function isElementalPatreon(): bool
    {
        // We check the campaign and roles for 61105 because of a special Elemental subscriber.
        $campaign = CampaignLocalization::getCampaign(false);

        return (!empty($this->patreon_pledge) && $this->patreon_pledge == Patreon::PLEDGE_ELEMENTAL) ||
            (!empty($campaign) && $this->campaignRoles->where('campaign_id', $campaign->id)->where('id', '61105')->count() == 1);
    }

    /**
     * @return bool
     */
    public function isOwlbear(): bool
    {
        return !empty($this->patreon_pledge) && $this->patreon_pledge == Patreon::PLEDGE_OWLBEAR;
    }

    /**
     * @return bool
     */
    public function isWyvern(): bool
    {
        return !empty($this->patreon_pledge) && $this->patreon_pledge == Patreon::PLEDGE_WYVERN;
    }


    /**
     * Get available boosts for the user
     * @return int
     */
    public function availableBoosts(): int
    {
        return $this->maxBoosts() - $this->boosting();
    }

    /**
     * Get amount of campaigns the user is boosting
     * @return int
     */
    public function boosting(): int
    {
        return $this->boosts->count();
    }

    /**
     * Get max number of boosts a user can give
     * @return int
     */
    public function maxBoosts(): int
    {
        // Allows admins to give boosters to members of the community
        $base = 0;
        if (!empty($this->booster_count)) {
            $base += $this->booster_count;
        }

        if (!$this->isPatron()) {
            return $base;
        }

        if ($this->hasRole('admin')) {
            return max(3, $base);
        }

        $levels = [
            Patreon::PLEDGE_KOBOLD => 0,
            Patreon::PLEDGE_GOBLIN => 1,
            Patreon::PLEDGE_OWLBEAR => 3,
            Patreon::PLEDGE_WYVERN => 6,
            Patreon::PLEDGE_ELEMENTAL => 10,
        ];

        // Default 3 for admins and owlbears
        return Arr::get($levels, $this->patreon_pledge, 0) + $base;
    }

    /**
     * API throttling is increased for patrons
     * @return int
     */
    public function getRateLimitAttribute(): int
    {
        return $this->isGoblinPatron() ? 90 : 30;
    }

    /**
     * Currency symbol
     * @return string
     */
    public function currencySymbol(): string
    {
        if ($this->currency === 'eur') {
            return '€';
        }
        return 'US$';
    }

    /**
     * Determine if ads should be shown for the user or campaign
     * @return bool
     */
    public function showAds(): bool
    {
        // Patrons and subs don't have ads
        if ($this->isPatron()) {
            return false;
        }

        // Campaigns that are boosted don't either
        $campaign = CampaignLocalization::getCampaign(false);
        return !empty($campaign) && !$campaign->boosted();
    }

    /**
     * @return array
     */
    public function adminCampaigns(): array
    {
        $campaigns = [];

        $roles = $this
            ->campaignRoles()
            ->where('campaign_roles.is_admin', 1)->with('campaign')
            ->get();
        foreach ($roles as $role) {
            $campaigns[$role->campaign->id] = $role->campaign->name;
        }

        return $campaigns;
    }

    /**
     * Check if User has a Role(s) associated.
     *
     * @param string|array $name The role(s) to check.
     *
     * @return bool
     */
    public function hasRole($name): bool
    {
        $roles = $this->roles->pluck('name')->toArray();

        foreach ((is_array($name) ? $name : [$name]) as $role) {
            if (in_array($role, $roles)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Determine if a user is using a social login
     * @return bool
     */
    public function isSocialLogin(): bool
    {
        return !empty($this->provider);
    }

    /**
     * Number of entities the user has created
     * @return string
     */
    public function createdEntitiesCount(): string
    {
        return (string) number_format(UserCache::user($this)->entitiesCreatedCount());
    }

    public function hasPlugins(): bool
    {
        return $this->plugins->count();
    }

    /**
     * Get the Discord app of the user
     * @return mixed
     */
    public function discord()
    {
        return $this->apps->where('app', 'discord')->first();
    }

    /**
     * Number of koinks a user has
     * @return int
     */
    public function koinks(): int
    {
        $koinks = substr($this->id, 0, 3);
        $koinks = str_pad($koinks, 3, 0);
        return $koinks;
    }
}
