<?php /** @var \App\Models\Journal $model */

?>
@inject('dateRenderer', 'App\Renderers\DateRenderer')


<div class="box box-solid box-entity-profile">
    <div class="box-body">
        <div class="row">
            <div class="col-sm-4">
                @if ($model->type)
                    <p class="entity-type">
                        <b>{{ trans('journals.fields.type') }}</b><br />
                        {{ $model->type }}
                    </p>
                @endif
                @if ($model->date)
                    <p class="entity-date">
                        <b>{{ trans('journals.fields.date') }}</b><br />
                        {{ $dateRenderer->render($model->date) }}
                    </p>
                @endif
                @if ($model->journal)
                    <p class="entity-journal" data-foreign="{{ $model->journal_id }}">
                        <b>{{ trans('journals.fields.journal') }}</b><br />
                        {!! $model->journal->tooltipedLink() !!}
                    </p>
                @endif
                @if ($campaign->enabled('characters') && !empty($model->character))
                    <p class="entity-character" data-foreign="{{ $model->character_id }}">
                        <b>{{ trans('journals.fields.author') }}</b><br />
                    {!! $model->character->tooltipedLink() !!}
                    </p>
                @endif


                @include('entities.components.calendar')
            </div>
        </div>
    </div>
</div>
