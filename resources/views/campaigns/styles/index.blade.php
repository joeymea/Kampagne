<?php /** @var \App\Models\CampaignStyle $style */?>
@extends('layouts.app', [
    'title' => trans('campaigns/styles.title', ['campaign' => $campaign->name]),
    'breadcrumbs' => [
        ['url' => route('campaign'), 'label' => __('campaigns.index.title')],
        __('campaigns.show.tabs.styles')
    ],
    'mainTitle' => false,
])

@section('content')
    @include('partials.errors')

    <div class="row">
        <div class="col-md-3">
            @include('campaigns._menu', ['active' => 'styles'])
        </div>
        <div class="col-md-9">
            @if (!$campaign->boosted())
                <div class="box box-solid">
                    <div class="box-body">
                        <p class="help-block">
                            {!! __('campaigns/styles.helpers.main', ['here' => link_to('https://blog.kanka.io/category/tutorials', __('campaigns/styles.helpers.here'), ['target' => '_blank'])]) !!}
                        </p>

                        @include('partials.boosted', ['callout' => true])
                    </div>
                </div>
            @else
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ __('campaigns.show.tabs.styles') }}</h3>
                    <div class="box-tools">
                        <button class="btn btn-default btn-sm" data-toggle="modal"
                                data-target="#theming-help">
                            <i class="fas fa-question-circle" aria-hidden="true"></i>
                            {{ __('campaigns.members.actions.help') }}
                        </button>

                        <a href="#" data-url="{{ route('campaign-theme') }}" data-target="#entity-modal" data-toggle="ajax-modal" class="btn btn-default btn-sm" >
                            <i class="fas fa-brush"></i> {{ __('campaigns/styles.actions.current', ['theme' => !empty($theme) ? $theme->__toString() : __('crud.filters.options.none')]) }}
                        </a>

                        <a href="{{ route('campaign_styles.create') }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i> {{ __('campaigns/styles.actions.new') }}
                        </a>
                    </div>
                </div>
                @if ($styles->count() === 0)
                    <div class="box-body">
                        <p class="help-block">
                            {!! __('campaigns/styles.helpers.main', ['here' => link_to('https://blog.kanka.io/category/tutorials', __('campaigns/styles.helpers.here'), ['target' => '_blank'])]) !!}
                        </p>
                    </div>
                @else
                <div class="box-body no-padding">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>{{ __('campaigns/styles.fields.name') }}</th>
                            <th class="hidden-xs">{{ __('campaigns/styles.fields.length') }}</th>
                            <th class="hidden-xs">{{ __('campaigns/styles.fields.modified') }}</th>
                            <th>{{ __('campaigns/styles.fields.is_enabled') }}</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($styles as $style)
                            <tr>
                                <td>
                                    <a href="{{ route('campaign_styles.edit', $style) }}">{!! $style->name !!}</a>
                                </td>
                                <td class="hidden-xs">
                                    {{ number_format(strlen($style->content)) }}
                                </td>
                                <td class="hidden-xs">
                                    {{ $style->updated_at->diffForHumans() }}
                                </td>
                                <td>
                                    @if($style->is_enabled)
                                        <i class="fa fa-check-circle"></i>
                                    @endif
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle btn btn-xs btn-default" data-toggle="dropdown" aria-expanded="false" data-placement="right" href="#">
                                            <i class="fa fa-ellipsis-h" data-tree="escape"></i>
                                            <span class="sr-only">{{ __('crud.actions.actions') }}</span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li>
                                                <a href="{{ route('campaign_styles.edit', [$style]) }}">
                                                    <i class="fa fa-pencil"></i> {{ __('crud.edit') }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="text-red delete-confirm" data-toggle="modal" data-name="{!! $style->name !!}"
                                                   data-target="#delete-confirm" data-delete-target="delete-form-{{ $style->id }}">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                    {{ __('crud.remove') }}
                                                </a>

                                                {!! Form::open(['method' => 'DELETE','route' => ['campaign_styles.destroy', $style], 'style '=> 'display:inline', 'id' => 'delete-form-' . $style->id]) !!}
                                                {!! Form::close() !!}
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @if ($styles->hasPages())
                    <div class="box-footer text-right">
                        {!! $styles->links() !!}
                    </div>
                @endif
                @endif
            </div>
            @endif
        </div>
    </div>
@endsection


@section('modals')

    <div class="modal fade" id="theming-help" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('crud.delete_modal.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">
                        {{ __('campaigns.show.tabs.styles') }}
                    </h4>
                </div>
                <div class="modal-body">
                    <p>
                        {!! __('campaigns/styles.helpers.main', ['here' => link_to('https://blog.kanka.io/category/tutorials', __('campaigns/styles.helpers.here'), ['target' => '_blank'])]) !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
