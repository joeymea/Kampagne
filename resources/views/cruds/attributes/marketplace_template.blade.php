<?php
/**
 * @var \App\Models\Plugin $plugin
 * @var \App\Models\Attribute $attribute
 */
?>

<div class="marketplace-template-{{ $plugin->plugin->uuid }}">
    {!! $plugin->version->content(isset($entity) ? $entity : $model->entity) !!}
</div>


@section('styles')
    @parent
    <style>
        /** Entity attributes **/
        :root {
@foreach ((isset($entity) ? $entity->allAttributes : $model->entity->allAttributes) as $attribute) @if ($attribute->isText()) @continue @endif
            --attribute-{{ \Illuminate\Support\Str::slug($attribute->name) }}: {{ trim(preg_replace('/\s+/', ' ', $attribute->value)) }};
@endforeach
        }
        {!! $plugin->version->css !!}
    </style>
@endsection
