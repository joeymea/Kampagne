<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Relation;
use App\Http\Requests\StoreRelation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocationRelationController extends CrudRelationController
{
    /**
     * @var string
     */
    protected $view = 'locations.relations';

    /**
     * @var string
     */
    protected $route = 'locations.relations';

    /**
     * @var string
     */
    protected $model = \App\Models\Relation::class;

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Location $location)
    {
        return $this->crudCreate($location);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRelation $request, Location $location)
    {
        return $this->crudStore($request, $location);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location, Relation $relation)
    {
        return $this->crudEdit($location, $relation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(StoreRelation $request, Location $location, Relation $relation)
    {
        return $this->crudUpdate($request, $location, $relation);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Relation  $locationRelation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location, Relation $relation)
    {
        return $this->crudDestroy($location, $relation);
    }
}
