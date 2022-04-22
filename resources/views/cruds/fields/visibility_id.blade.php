<?php
/**
 * @var \App\Models\Entity $entity
 * @var \App\Models\EntityNote $model
 */
use App\Models\Visibility;

$options = [];
if (isset($bulk)) {
    $options[''] = '';
}

$options[Visibility::VISIBILITY_ALL] = __('crud.visibilities.all');

if (auth()->user()->isAdmin()) {
    $options[Visibility::VISIBILITY_ADMIN] = __('crud.visibilities.admin');
    $options[Visibility::VISIBILITY_MEMBERS] = __('crud.visibilities.members');
}
if (!isset($model) || ($model->created_by == auth()->user()->id)) {
    $options[Visibility::VISIBILITY_SELF] = __('crud.visibilities.self');
    $options[Visibility::VISIBILITY_ADMIN_SELF] = __('crud.visibilities.admin-self');
}

// If it's a visibility self & admin and we're not the creator, we can't change this
if (isset($model) && $model->visibility_id === Visibility::VISIBILITY_ADMIN_SELF && $model->created_by !== auth()->user()->id) {
    $options = [Visibility::VISIBILITY_ADMIN_SELF => __('crud.visibilities.admin-self')];
}

// The visibility is set to admin but we're not an admin, don't allow changing
// as it's a custom permission for the user to be able to edit this model.
if (isset($model) && in_array($model->visibility_id, [Visibility::VISIBILITY_ADMIN, Visibility::VISIBILITY_MEMBERS]) && !auth()->user()->isAdmin()) {
    ?><input type="hidden" name="visibility_id" value="{{ $model->visibility_id }}" /><?php
    return;
}
?>
<div class="form-group">
    <label for="visibility">
        {{ trans('crud.fields.visibility') }}
        <i class="fa fa-question-circle hidden-xs hidden-sm" data-toggle="tooltip" title="{{ trans('crud.hints.visibility') }}"></i>
    </label>
    {{ Form::select('visibility_id', $options, empty($model) ? CampaignLocalization::getCampaign()->defaultVisibilityID() : $model->visibility_id, ['class' => 'form-control', 'id' => 'visibility_id']) }}

    <p class="help-block visible-xs visible-sm">{{ __('crud.hints.visibility') }}</p>
</div>
