<?php /** @var \App\Datagrids\Datagrid $datagrid */?>

@php
$dropdownActions = [];
if (isset($bulk) && (!isset($bulkTemplates) || $bulkTemplates)) {
    $dropdownActions[] = '<li class="dropdown-item">
                <a href="#" class="bulk-templates" id="datagrids-bulk-actions-templates" data-toggle="ajax-modal" data-target="#bulk-permissions.modal" data-url="' . route('bulk.modal', ['view' => 'templates']) . '">
                    <i class="fa fa-th-list"></i> ' . __('crud.actions.bulk_templates') . '
                </a>
            </li>';
}
if (!isset($datagrid) || $datagrid->bulkPermissions) {
  $dropdownActions[] = '<li class="dropdown-item">
                <a href="#" class="bulk-permissions" id="datagrids-bulk-actions-permissions" data-toggle="ajax-modal" data-target="#bulk-permissions.modal" data-url="' . route('bulk.modal', ['view' => 'permissions']) . '">
                    <i class="fa fa-cog"></i> ' .  __('crud.tabs.permissions') . '
                </a>
            </li>';
}
if (!isset($datagrid) || $datagrid->bulkTransform) {
   $dropdownActions[] = '<li class="dropdown-item">
                <a href="#" class="bulk-copy-campaign" id="datagrids-bulk-actions-transform" data-toggle="ajax-modal" data-target="#bulk-transform.modal" data-url="' .  route('bulk.modal', ['view' => 'transform', 'type' => $name]) . '">
                    <i class="fa fa-exchange-alt"></i> ' .  __('crud.actions.transform') . '
                </a>
            </li>';
}
if (!isset($datagrid) || $datagrid->bulkCopyToCampaign) {
   $dropdownActions[] = '<li class="dropdown-item">
                <a href="#" class="bulk-copy-campaign" id="datagrids-bulk-actions-copy-campaign" data-toggle="ajax-modal" data-target="#bulk-permissions.modal" data-url="' .  route('bulk.modal', ['view' => 'copy_campaign', 'type' => $name]) . '">
                    <i class="fa fa-clone"></i> ' .  __('crud.actions.copy_to_campaign') . '
                </a>
            </li>';
}

@endphp

<div class="datagrid-bulk-actions">
@if (auth()->user()->isAdmin())
    <div class="btn-group">
        @if (!isset($datagrid) || !$datagrid instanceof \App\Datagrids\NoneDatagrid)
        <a href="#" class="btn btn-default bulk-edit disabled" data-toggle="modal" data-target="#bulk-edit.modal" id="datagrids-bulk-actions-batch" >
            <i class="fa fa-edit"></i> {{ __('crud.bulk.actions.edit') }}
        </a>
        @if (!empty($dropdownActions))
        <a class="dropdown-toggle btn btn-default" data-toggle="dropdown" aria-expanded="false" data-placement="right">
            <span class="caret"></span>
            <span class="sr-only">{{__('crud.actions.actions') }}'</span>
        </a>
        <ul class="dropdown-menu" role="menu">
            {!! implode("\n", $dropdownActions) !!}
        </ul>
        @endif
    @endif
    </div>
    @endif
    @can('delete', $model)
        <a href="#" class="btn btn-danger bulk-delete disabled" data-toggle="modal" data-target="#bulk-delete.modal" id="datagrids-bulk-actions-delete">
            <i class="fa fa-trash"></i> {{ __('crud.remove') }}
        </a>
    @endcan

    @if (!isset($datagrid) || $datagrid->bulkPrint)
        {!! Form::button('<i class="fa fa-print"></i> ' . __('crud.actions.print'), ['type' => 'submit', 'name' => 'datagrid-action', 'value' => 'print', 'class' => 'btn btn-primary', 'id' => 'datagrids-bulk-actions-print', 'disabled'=>'disabled']) !!}
    @endif
</div>

