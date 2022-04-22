<?php /** @var \App\Models\MiscModel $model */?>

@inject('campaign', 'App\Services\CampaignService')
@php
    $headerImage = true;
@endphp

@extends('layouts.print', [
    'title' => __('Print'),
    'breadcrumbs' => false,
    'canonical' => true,
    'mainTitle' => false,
    'bodyClass' => 'entity-story'
])





@section('content')

    <button class="btn btn-lg btn-warning btn-print" onclick="javascript:window.print();">
        <i class="fas fa-print"></i> {{ __('crud.actions.print') }}
    </button>

    @foreach ($entities as $model)
        @php $entity = $model->entity; $name = $entity->pluralType() @endphp

        @if(view()->exists($entity->pluralType() . '.show'))
            @include($entity->pluralType() . '.show')
        @else
            @include('cruds.overview')
        @endif
        @includeIf('entities.pages.profile._' . $entity->type())
        @includeIf($entity->pluralType() . '._print')
        @includeWhen($entity->abilities->count() > 0, 'entities.pages.print._abilities')
        @includeWhen($entity->inventories->count() > 0, 'entities.pages.inventory._inventory', [
        'inventory' =>
                $entity->inventories()
                ->with(['entity', 'item', 'item.entity'])
                ->has('entity')
                ->get()
                ->sortBy(function($model, $key) {
                    return !empty($model->position) ? $model->position : 'zzzz' . $model->itemName();
                })
    ])
        @includeWhen($entity->relationships->count() > 0, 'entities.pages.print._relations')
        @includeWhen($entity->attributes->count() > 0, 'entities.pages.print._attributes')
        <div class="pagebreak"></div>
    @endforeach



@endsection



@section('styles')
    @parent
    <link href="{{ mix('css/abilities.css') }}" rel="stylesheet">
@endsection
