<div class="panel panel-default">
    <div class="panel-heading">
        <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('crud.delete_modal.close') }}"><span aria-hidden="true">&times;</span></button>
        <h4>
            {{ __('entities/links.unboosted.title') }}
        </h4>
    </div>
    <div class="panel-body">
        <p class="alert alert-warning">{!! __('entities/aliases.unboosted.text', [
            'boosted-campaigns' => link_to_route('front.pricing', __('crud.boosted_campaigns'), ['#boost'], ['target' => '_blank'])
        ]) !!}</p>
    </div>
</div>
