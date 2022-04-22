<?php
/**
 * @var \App\Models\Entity $entity
 * @var \App\Models\CampaignDashboardWidget $widget
 * @var \App\Models\Tag $tag
 */
if (!isset($offset)) {
    $offset = 0;
}
$entityType = $widget->conf('entity');
$entityTypeID = (int) config('entities.ids.' . $entityType);
$entity = \App\Models\Entity::
        inTags($widget->tags->pluck('id')->toArray())
        ->whereNotIn('type', ['attribute_template', 'conversation', 'tag'])
        ->type($entityTypeID)
        ->acl()
        ->with(['image'])
        ->whereNotIn('entities.id', \App\Facades\Dashboard::excluding())
        ->inRandomOrder()
        ->first();

if (empty($entity) || empty($entity->child)) {
    return;
}
\App\Facades\Dashboard::add($entity);
$model = $entity->child;

$specificPreview = 'dashboard.widgets.previews.' . $entity->type();
$customName = !empty($widget->conf('text')) ? str_replace('{name}', $model->name, $widget->conf('text')) : null;
$widget->setEntity($entity);
?>
@if(view()->exists($specificPreview))
    @include($specificPreview, ['entity' => $entity, 'customName' => $customName])
@else
<div class="panel panel-default widget-preview {{ $widget->customClass($campaign) }}" id="dashboard-widget-{{ $widget->id }}">
    <div
        @if ($widget->conf('entity-header') && $campaign->boosted() && $entity->header_image)
            class="panel-heading panel-heading-entity"
            style="background-image: url('{{ $entity->getImageUrl(1200, 400, 'header_image') }}')"
        @elseif ($widget->conf('entity-header') && $campaign->boosted(true) && $widget->entity->header)
            class="panel-heading panel-heading-entity"
            style="background-image: url('{{ Img::crop(1200, 400)->url($widget->entity->header->path) }}')"
        @elseif ($entity->child->image)
            class="panel-heading panel-heading-entity"
            style="background-image: url('{{ $entity->child->getImageUrl() }}')"
        @elseif($campaign->boosted(true) && !empty($entity->image))
            class="panel-heading panel-heading-entity"
            style="background-image: url('{{ Img::crop(1200, 400)->url($entity->image->path) }}')"
        @else
            class="panel-heading"
        @endif
    >
        <h3 class="panel-title">
            <a href="{{ $entity->url() }}">
                @if ($model->is_private)
                    <i class="fas fa-lock pull-right" title="{{ trans('crud.is_private') }}"></i>
                @endif
                @if (!empty($widget->conf('text')))
                    {{ $customName }}
                @else
                    {{ $entity->name }}
                @endif
            </a>

        </h3>
    </div>
    <div class="panel-body">
        @if ($widget->conf('full') === '1')
            <div class="entity-content">
                {!! $model->entry() !!}
            </div>

            @include('dashboard.widgets.previews._members')
            @include('dashboard.widgets.previews._relations')
            @include('dashboard.widgets.previews._attributes')
        @else
        <div class="pinned-entity preview" data-toggle="preview" id="widget-preview-body-{{ $widget->id }}">
            <div class="entity-content">
                {!! $model->entry() !!}
            </div>

            @include('dashboard.widgets.previews._members')
            @include('dashboard.widgets.previews._relations')
            @include('dashboard.widgets.previews._attributes')
        </div>
        <a href="#" class="preview-switch hidden"
           id="widget-preview-switch-{{ $widget->id }}" data-widget="{{ $widget->id }}">
            <i class="fa fa-chevron-down"></i>
        </a>
        @endif
    </div>
</div>
@endif
