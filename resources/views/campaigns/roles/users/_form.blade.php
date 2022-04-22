{{ csrf_field() }}
<div class="row">
    <div class="col-md-12">
        <div class="form-group required">
            <label>{{ trans('campaigns.members.fields.name') }}</label>
            {!! Form::select('user_id', $campaign->membersList($role->users->pluck('user_id')->toArray()), null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

