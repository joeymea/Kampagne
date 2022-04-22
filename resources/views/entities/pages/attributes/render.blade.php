@inject('attributeService', 'App\Services\AttributeService')
<?php
/**
 * @var \App\Services\AttributeService $attributeService
 * @var \App\Models\Campaign $campaign
 * @var \App\Models\Entity $entity
 */
$layout = $entity->entityAttributes->where('name', '_layout')->first();
if ($layout) {
    $template = $attributeService->communityTemplate($layout->value);
    $marketplaceTemplate = $attributeService->marketplaceTemplate($layout->value, $campaign->campaign());
}
?>

@if (!empty($template))
    @include($template->view())
@elseif (!empty($marketplaceTemplate))
    @include('cruds.attributes.marketplace_template', ['plugin' => $marketplaceTemplate])
@else
    @include('entities.pages.attributes._attributes', [
        'attributes' => $entity->attributes()->with('entity')->ordered()->get()
    ])
@endif
