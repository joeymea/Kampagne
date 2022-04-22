<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Entity extends EntityChild
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if (!$this->child) {
            return ['error' => 'KA7: Entity #' . $this->id . ' missing child.'];
        }
        return [
            'id' => $this->child->id,
            'entity_id' => $this->id,
            'name' => $this->name,
            'image' => $this->child->getImageUrl(0),
            'image_thumb' => $this->child->getImageUrl(40),
            'has_custom_image' => !empty($this->child->image),

            'type' => $this->type(),
            'type_id' => $this->type_id,
            'tooltip' => $this->tooltip,
            'url' => $this->url(),
            'is_attributes_private' => $this->is_attributes_private,

            'is_private' => (bool) $this->child->is_private,

            'created_at' => $this->child->created_at,
            'created_by' => $this->created_by,
            'updated_at' => $this->child->updated_at,
            'updated_by' => $this->updated_by,
        ];
    }
}
