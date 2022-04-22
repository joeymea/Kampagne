<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AttributeResource extends EntityChild
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->entity([
            'name' => $this->name,
            'value' => $this->value,
            'parsed' => $this->mappedValue(),
            'type' => $this->type,
            'default_order' => $this->default_order,
            'is_star' => (bool) $this->is_star,
            'api_key' => $this->api_key
        ]);
    }
}
