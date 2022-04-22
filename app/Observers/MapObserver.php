<?php

namespace App\Observers;

use App\Models\Entity;
use App\Models\Map;
use App\Models\MiscModel;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class MapObserver extends MiscObserver
{
    /**
     * @param Map $map
     */
    public function saving(MiscModel $map)
    {
        // When saving a map that has an image but no height, force the height and width attribute to null
        // to be handled in the ImageHandler. It uses getAttributes on the model but these aren't present
        // for some reason.
        if (empty($map->height)) {
            $map->height = 0;
            $map->width = 0;
        }
        parent::saving($map);

        $map->grid = (int) $map->grid;
    }

    /**
     * @param Map $model
     */
    public function deleting(MiscModel $model)
    {
        /**
         * We need to do this ourselves and not let mysql to it (set null), because the plugin wants to delete
         * all descendants when deleting the parent, which is stupid.
         * @var Map $sub
         */
        foreach ($model->maps as $sub) {
            $sub->map_id = null;
            $sub->save();
        }

        $this->cleanupTree($model, 'map_id');
    }

    /**
     * When an element is created, check for the copy option
     * @param MiscModel $model
     */
    public function created(MiscModel $model)
    {
        parent::created($model);

        // Copy eras from timeline
        if (request()->has('copy_elements') && request()->filled('copy_elements')) {
            $sourceId = request()->post('copy_source_id');

            /** @var Entity $source */
            $source = Entity::findOrFail($sourceId);
            if ($source->typeId() == config('entities.ids.map')) {
                $source->child->copyRelatedToTarget($model);
            }
        }
    }
}
