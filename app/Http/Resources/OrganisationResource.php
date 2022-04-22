<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrganisationResource extends EntityResource
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
            'type' => $this->type,
            'organisation_id' => $this->organisation_id,
            'members' => OrganisationMemberResource::collection($this->members()->has('character')->with('character')->get())
        ]);
    }
}
