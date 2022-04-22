@extends('layouts.app', [
    'title' => trans('entities/attributes.template.title', ['name' => $entity->name]),
    'description' => '',
    'breadcrumbs' => [
        ['url' => route($parentRoute . '.index'), 'label' => trans($parentRoute . '.index.title')],
        ['url' => route($parentRoute . '.show', $entity->child->id), 'label' => $entity->name]
    ]
])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    @include('partials.errors')

                    {!! Form::open(array('route' => ['entities.attributes.template', $entity->id], 'method'=>'POST', 'data-shortcut' => "1")) !!}
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group required">
                                <label>{{ trans('entities/attributes.fields.template') }}</label>
                                {!! Form::select('template_id', \App\Models\AttributeTemplate::pluck('name', 'id'), null, ['placeholder' => trans('entities/attributes.placeholders.template'), 'class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    {!! Form::hidden('entity_id', $entity->id) !!}

                    <div class="form-group">
                        <button class="btn btn-success">{{ trans('crud.save') }}</button>
                        @include('partials.or_cancel')
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
