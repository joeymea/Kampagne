<?php

namespace App\Traits;

use App\Models\Scopes\VisibilityScope;

/**
 * Trait VisibilityTrait
 * @package App\Traits
 *
 * @property string $visibility
 * @property int $created_by
 */
trait VisibilityTrait
{
    /**
     * Add the Visible scope as a default scope to this model
     */
    public static function bootVisibilityTrait()
    {
        static::addGlobalScope(new VisibilityScope());
    }
}
