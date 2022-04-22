<?php /**
 * @var \App\Models\CommunityEvent $model
 * @var \App\Models\CommunityEventEntry $entry
 * */?>
<h2 class="cart-title mb 1">
    {{ __('front/community-events.results.title') }}
</h2>

<p class="text-muted"> {{ __('front/community-events.results.description') }}</p>


<table class="table table-hover table-borderless">
<thead>
    <tr>
    <th>
        {{ __('front/community-events.fields.rank') }}
    </th>
    <th>
        {{ __('front/community-events.fields.submitter') }}
    </th>
    <th>
        {{ __('front/community-events.fields.entity_link') }}
    </th>
    </tr>
    </thead>
<tbody>
@foreach ($model->rankedResults as $entry)
    <tr>
        <td>
            @if ($entry->rank == 1)
                # {{ $entry->rank }}
            @else
                {{ __('front/community-events.fields.honorable') }}
            @endif
        </td>
        <td>
            @if ($entry->user)
            {{ $entry->user->name }}
            @else
            <i>{{ __('crud.users.unknown') }}</i>
            @endif
        </td>
        <td>
            <a href="{{ $entry->link }}" class="btn btn-secondary" target="_blank">
                {{ __('front/community-events.actions.view')  }}
            </a>
        </td>
    </tr>
@endforeach
</tbody>
</table>
