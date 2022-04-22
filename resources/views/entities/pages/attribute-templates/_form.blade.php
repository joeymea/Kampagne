
<div class="panel panel-default">
    @if (request()->ajax())
    <div class="panel-heading">
        <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('crud.delete_modal.close') }}"><span aria-hidden="true">&times;</span></button>
        <h4>{{ __('entities/attributes.template.title', ['name' => $entity->name]) }}</h4>
    </div>
    @endif
    <div class="panel-body">
        {!! Form::open(['route' => ['entities.attributes.template', $entity->id], 'method'=>'POST', 'data-shortcut' => '1']) !!}
        {{ csrf_field() }}
        <div class="form-group required">
            <label>{{ __('entities/attributes.fields.template') }}</label>
            {!! Form::select('template_id', $templates, null, ['placeholder' => __('entities/attributes.placeholders.template'), 'class' => 'form-control']) !!}
        </div>

        <p class="help-block">
        {!! __('attributes/templates.helpers.marketplace', [
    'boosted-campaigns' => link_to_route('front.pricing', __('crud.boosted_campaigns'), '#boost'),
    'marketplace' => link_to('https://marketplace.kanka.io/attribute-templates', __('front.menu.marketplace'), ['target' => '_blank'])
    ]) !!}
        </p>

        <div class="form-group">
            <button class="btn btn-success">{{ __('crud.actions.apply') }}</button>
            @includeWhen(!request()->ajax(), 'partials.or_cancel')
        </div>

        {!! Form::close() !!}
    </div>
</div>
