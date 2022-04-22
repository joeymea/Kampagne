<?php

namespace App\Policies;

use App\Facades\CampaignCache;
use App\Facades\EntityPermission;
use App\Facades\Identity;
use App\Facades\UserCache;
use App\Models\Entity;
use App\Traits\AdminPolicyTrait;
use App\Traits\EnvTrait;
use App\User;
use App\Models\Campaign;
use Illuminate\Auth\Access\HandlesAuthorization;

class CampaignPolicy
{
    use HandlesAuthorization, AdminPolicyTrait, EnvTrait;

    /**
     * Determine whether the user can view the campaign.
     *
     * @param  User  $user
     * @param  Campaign  $campaign
     * @return mixed
     */
    public function view(User $user, Campaign $campaign): bool
    {
        return $user->campaign->id == $campaign->id;
    }

    /**
     * Determine whether the user can access the campaign
     *
     * @param User $user
     * @param Campaign $campaign
     * @return bool
     */
    public function access(User $user, Campaign $campaign): bool
    {
        if ($campaign->isPublic()) {
            return true;
        }
        return $campaign->userIsMember();
    }

    /**
     * Determine whether the user can create campaigns.
     *
     * @param  User  $user
     * @return mixed
     */
    public function create(User $user): bool
    {
        return !Identity::isImpersonating();
    }

    /**
     * Determine whether the user can update the campaign.
     *
     * @param  User  $user
     * @param  Campaign  $campaign
     * @return mixed
     */
    public function update(User $user, Campaign $campaign): bool
    {
        return
            $user->campaign->id == $campaign->id && (
                UserCache::user($user)->admin() || $this->checkPermission('manage', $user)
            );
    }

    /**
     * Determine whether the user can manage the roles of the campaign.
     *
     * @param  User  $user
     * @param  Campaign  $campaign
     * @return mixed
     */
    public function roles(User $user, Campaign $campaign): bool
    {
        return
            $user->campaign->id == $campaign->id && (
                UserCache::user($user)->admin()
            );
    }

    /**
     * Determine whether the user can delete the campaign.
     *
     * @param  User  $user
     * @param  Campaign  $campaign
     * @return mixed
     */
    public function delete(User $user, Campaign $campaign): bool
    {
        return
            $user->campaign->id == $campaign->id &&
            UserCache::user($user)->admin() &&
            CampaignCache::members()->count() == 1;
    }

    /**
     * @param User $user
     * @param Campaign $campaign
     * @return bool
     */
    public function invite(User $user, Campaign $campaign): bool
    {
        return $user->campaign->id == $campaign->id && (
            UserCache::user($user)->admin() || $this->checkPermission('members', $user, $campaign)
        );
    }

    /**
     * @param User $user
     * @param Campaign $campaign
     * @return bool
     */
    public function setting(User $user, Campaign $campaign): bool
    {
        return $user->campaign->id == $campaign->id && UserCache::user($user)->admin();
    }

    /**
     * @param User $user
     * @param Campaign $campaign
     * @return bool
     */
    public function recover(User $user, Campaign $campaign): bool
    {
        return $user->campaign->id == $campaign->id && UserCache::user($user)->admin();
    }

    /**
     * @param User $user
     * @param Campaign $campaign
     * @return bool
     */
    public function dashboard(User $user, Campaign $campaign): bool
    {
        return $user->campaign->id == $campaign->id && (
            UserCache::user($user)->admin() || $this->checkPermission('dashboard', $user, $campaign));
    }

    /**
     * @param User $user
     * @param Campaign $campaign
     * @return bool
     */
    public function stats(User $user, Campaign $campaign): bool
    {
        return $user->campaign->id == $campaign->id && (UserCache::user($user)->admin() || $campaign->userIsMember());
    }

    /**
     * @param User $user
     * @param Campaign $campaign
     * @return bool
     */
    public function search(User $user, Campaign $campaign): bool
    {
        return $user->campaign->id == $campaign->id && UserCache::user($user)->admin();
    }

    /**
     * Determine whether the user can leave the campaign
     *
     * @param User $user
     * @param Campaign $campaign
     * @return bool
     */
    public function leave(User $user, Campaign $campaign)
    {
        return
            $user->campaign->id == $campaign->id &&
            // If we are not the owner, or that we are an owner but there are other owners
            $campaign->userIsMember() && (!UserCache::user($user)->admin() || count($campaign->admins()) > 1) &&
            // We also can't leave a campaign if we are not the real user
            !Identity::isImpersonating();
    }

    /**
     * Determine if a user can follow a campaign
     * @param User|null $user
     * @param Campaign $campaign
     * @return bool
     */
    public function follow(User $user, Campaign $campaign)
    {
        if (empty($user)) {
            return false;
        }

        if (!$campaign->isPublic()) {
            return false;
        }

        return !$campaign->userIsMember();
    }
    /**
     *
     * Determine if a user can apply to a campaign
     * @param User|null $user
     * @param Campaign $campaign
     * @return bool
     */
    public function apply(?User $user, Campaign $campaign)
    {
        if (empty($user)) {
            return false;
        }

        if (!$campaign->isPublic() || !$campaign->is_open) {
            return false;
        }

        return !$campaign->userIsMember();
    }

    /**
     * Permission to view the members of a campaign
     * @param User $user
     * @param Campaign $campaign
     * @return bool
     */
    public function members(?User $user, Campaign $campaign)
    {
        if (!$user) {
            return false;
        }
        return (UserCache::user($user)->admin() || $this->checkPermission('members', $user, $campaign)) ||
            !($campaign->boosted() && $campaign->hide_members);
    }

    /**
     * Permission to view the campaign submissions
     * @param User $user
     * @param Campaign $campaign
     * @return bool
     */
    public function submissions(?User $user, Campaign $campaign)
    {
        return $user && UserCache::user($user)->admin();
    }

    /**
     * @param User|null $user
     * @param Campaign $campaign
     * @return bool
     */
    public function gallery(?User $user, Campaign $campaign): bool
    {
        return $user && $campaign->boosted(true) && (
            UserCache::user($user)->admin() || $this->checkPermission('gallery', $user, $campaign)
        );
    }

    /**
     * @param User|null $user
     * @param Campaign $campaign
     * @return bool
     */
    public function relations(?User $user, Campaign $campaign): bool
    {
        return $user && UserCache::user($user)->admin();
    }

    /**
     * @param string $action
     * @param User $user
     * @param Entity|null $entity
     * @param Campaign|null $campaign
     * @return bool
     */
    protected function checkPermission($action, User $user, Campaign $campaign = null)
    {
        return EntityPermission::hasPermission('campaign', $action, $user, null, $campaign);
    }
}
