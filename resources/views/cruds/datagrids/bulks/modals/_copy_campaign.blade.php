
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('crud.click_modal.close') }}"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="clickModalLabel">{{ __('crud.copy_to_campaign.bulk_title') }}</h4>
</div>
<div class="modal-body">
    <p class="help-block">
        {{ __('entities/move.panel.description_bulk_copy') }}
    </p>

    <div class="form-group">
        <label>{{ __('entities/move.fields.campaign') }}</label>
        {!! Form::select('campaign', Auth::user()->moveCampaignList(false), null, ['class' => 'form-control']) !!}
    </div>

    @if(view()->exists($type . '.bulk.modals._copy_to_campaign'))
        @include($type . '.bulk.modals._copy_to_campaign')
    @endif
</div>

<div class="modal-footer">
    <a href="#" class="pull-left" data-dismiss="modal">{{ __('crud.cancel') }}</a>
    <button class="btn btn-primary" type="submit" name="datagrid-action" value="copy-campaign">{{ __('entities/move.actions.copy') }}</button>
</div>
