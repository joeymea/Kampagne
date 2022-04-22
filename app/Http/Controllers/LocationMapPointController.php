<?php

namespace App\Http\Controllers;

use App\Http\Requests\MoveLocationMapPoint;
use App\Http\Requests\StoreLocation;
use App\Http\Requests\StoreMapPoint;
use App\Models\Location;
use App\Models\MapPoint;
use App\Services\LocationService;
use App\Traits\GuestAuthTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Exception\LogicException;

class LocationMapPointController extends Controller
{
    use GuestAuthTrait;

    /**
     * @var string
     */
    protected $view = 'locations.map_points';
    protected $route = 'locations.map_points';

    /**
     * @var string
     */
    protected $model = \App\Models\MapPoint::class;

    /**
     * @param Request $request
     * @param Location $location
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request, Location $location)
    {
        $this->authorize('update', $location);
        return view('locations.map.edit', compact('location'));
    }

    /**
     * @param Location $location
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Location $location)
    {
        $this->authorize('update', $location);

        $ajax = request()->ajax();
        return view('locations.map_points.create', compact('location', 'ajax'));
    }

    /**
     * @param Location $location
     * @param MapPoint $mapPoint
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(Location $location, MapPoint $mapPoint)
    {
        // Policies will always fail if they can't resolve the user.
        if (Auth::check()) {
            $this->authorize('view', $location);
        } else {
            $this->model = Location::class;
            $this->authorizeForGuest('read', $location);
        }

        $ajax = request()->ajax();
        return view('locations.map_points.' . ($ajax ? '_' : null) . 'show', compact('location', 'mapPoint', 'ajax'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMapPoint $request, Location $location)
    {
        $this->authorize('update', $location);

        try {
            $model = new MapPoint();
            $mapPoint = $model->create($request->all());

            if ($request->ajax()) {
                return response()->json([
                    'point' => view('locations.map_points._point', ['point' => $mapPoint])->render(),
                    'id' => 'map-point-' . $mapPoint->id
                ]);
            }

            return redirect()->route('locations.map', $location)
                ->with('success', trans('locations.map.points.success.create'));
        } catch (LogicException $exception) {
            $error =  str_replace(' ', '_', strtolower($exception->getMessage()));
            return redirect()->back()->withInput()->with('error', trans('crud.errors.' . $error));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MapPoint  $mapPoint
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location, MapPoint $mapPoint)
    {
        $this->authorize('update', $location);
        $model = $mapPoint;
        $ajax = request()->ajax();

        return view('locations.map_points.edit', compact('location', 'model', 'ajax'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @param  \App\Models\MapPoint  $mapPoint
     * @return \Illuminate\Http\Response
     */
    public function update(StoreMapPoint $request, Location $location, MapPoint $mapPoint)
    {
        $this->authorize('update', $location);

        try {
            $data = $this->prepareData($request, $mapPoint);
            $mapPoint->update($data);

            if ($request->ajax()) {
                return response()->json([
                    'point' => view('locations.map_points._point', ['point' => $mapPoint])->render(),
                    'id' => 'map-point-' . $mapPoint->id
                ]);
            }

            return redirect()->route('locations.map', $location)
                ->with('success', trans('locations.map.points.success.update'));
        } catch (LogicException $exception) {
            $error =  str_replace(' ', '_', strtolower($exception->getMessage()));
            return redirect()->back()->withInput()->with('error', trans('crud.errors.' . $error));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @param  \App\Models\MapPoint  $mapPoint
     * @return \Illuminate\Http\Response
     */
    public function move(MoveLocationMapPoint $request, Location $location, MapPoint $mapPoint)
    {
        $this->authorize('update', $location);


        $mapPoint->axis_x = $request->post('axis_x', 1);
        $mapPoint->axis_y = $request->post('axis_y', 1);
        $mapPoint->save();

        return response()->json([
            'success' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @param  \App\Models\MapPoint  $mapPoint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location, MapPoint $mapPoint)
    {
        $this->authorize('update', $location);

        $mapPoint->delete();

        if (request()->ajax()) {
            return response()->json([
                'id' => 'map-point-' . $mapPoint->id
            ]);
        }

        return redirect()->route($this->route . '.show', [$location, '#map'])
            ->with('success', trans($this->view . '.destroy.success', ['name' => $mapPoint->location->name]));
    }

    /**
     * @param Request $request
     * @param MiscModel $model
     * @return array
     */
    protected function prepareData(Request $request, MapPoint $model)
    {
        $data = $request->all();
        foreach ($model->nullableForeignKeys as $field) {
            if (!request()->has($field) && !isset($data[$field])) {
                $data[$field] = null;
            }
        }
        return $data;
    }
}
