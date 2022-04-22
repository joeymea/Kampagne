<?php /** @var \App\Models\Attribute $attribute */?>
@php
$inSection = false;
@endphp
<dl class="dl-horizontal">
@foreach ($attributes as $attribute)
    @if ($attribute->isSection())
        </dl>
        @if ($inSection)
            </div></div>
        @endif
        @php
        $inSection = true;
        @endphp
        <div class="panel panel-default">
            <div class="panel-heading" data-toggle="collapse" data-target="#attribute-section-body-{{ $attribute->id }}">
                <h4 class="panel-title">
                    @if (auth()->check() && auth()->user()->isAdmin() && $attribute->is_private == true)
                        <i class="fas fa-lock pull-right" title="{{ trans('crud.is_private') }}"></i>
                    @endif

                    {!! $attribute->name() !!}
                </h4>
            </div>
            <div class="panel-body collapse in" id="attribute-section-body-{{ $attribute->id }}">
                <dl class="dl-horizontal">
        @continue
    @endif
        <dt>
            <span title="{attribute:{{ $attribute->id }}}" data-toggle="tooltip"
                  data-clipboard="{attribute:{{ $attribute->id }}}" data-toast="{{ __('crud.alerts.copy_attribute') }}">
            {!! $attribute->name() !!}
            </span>
            @if (auth()->check() && auth()->user()->isAdmin() && $attribute->is_private == true)
                <i class="fas fa-lock" title="{{ trans('crud.is_private') }}"></i>
            @endif
        </dt>
        <dd>
            @if ($attribute->isCheckbox())
                @if ($attribute->value)
                    <i class="fa fa-check"></i>
                @endif
            @elseif ($attribute->isText())
                {!! nl2br($attribute->mappedValue()) !!}
            @else
                {!! $attribute->mappedValue() !!}
            @endif

            @if($attributeService->isLoop($attribute->name))
                <i class="fa fa-warning" title="{{ __('entities/attributes.errors.loop') }}" data-toggle="tooltip"></i>
            @endif
        </dd>
@endforeach

@if($inSection)
            </dl>
        </div>
    </div>
@else
    </dl>
@endif
