@extends('layouts.' . (request()->ajax() ? 'ajax' : 'app'), [
    'title' => trans('dashboard.dashboards.update.title', ['name' => $dashboard->name]),
    'description' => '',
    'breadcrumbs' => []
])

@section('content')
    <div class="panel panel-default">
        @if (request()->ajax())
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="{{ trans('crud.delete_modal.close') }}"><span aria-hidden="true">&times;</span></button>
                <h4>
                    {!! __('dashboard.dashboards.update.title', ['name' => $dashboard->name]) !!}
                </h4>
            </div>
        @endif
        <div class="panel-body">
            @include('partials.errors')

            {!! Form::model($dashboard, ['route' => ['campaign_dashboards.update', $dashboard], 'method' => 'PATCH', 'data-shortcut' => 1]) !!}
            @include('dashboard.dashboards._form')

            <div class="form-group">
                <button class="btn btn-success">{{ trans('crud.save') }}</button>
                @includeWhen(!request()->ajax(), 'partials.or_cancel')
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
