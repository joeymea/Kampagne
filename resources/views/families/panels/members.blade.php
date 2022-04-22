<?php /** @var \App\Models\Family $model */?>
<div class="box box-solid" id="family-members">
    <div class="box-header">
        <h3 class="box-title">
            {{ __('families.show.tabs.members') }}
        </h3>
    </div>
    <div class="box-body">

        <p class="help-block">{{ __('families.members.helpers.direct_members') }}</p>

        @include('cruds.datagrids.sorters.simple-sorter', ['target' => '#family-members'])

        <table id="family-characters" class="table table-hover margin-top">
            <thead><tr>
                <th class="avatar"><br></th>
                <th>{{ __('characters.fields.name') }}</th>
                @if ($campaign->enabled('locations'))
                    <th class="hidden-xs hidden-sm">{{ __('characters.fields.location') }}</th>
                @endif
                @if ($campaign->enabled('races'))
                    <th class="hidden-xs hidden-sm">{{ __('characters.fields.race') }}</th>
                @endif
                <th class="hidden-xs hidden-sm">{{ __('characters.fields.sex') }}</th>
                <th>{{ __('characters.fields.is_dead') }}</th>
            </tr></thead>
            <tbody>
            <?php $r = $model->members()->with(['races', 'location'])->simpleSort($datagridSorter)->paginate();?>
            @foreach ($r->sortBy('character.name') as $member)
                <tr>
                    <td>
                        <a class="entity-image" style="background-image: url('{{ $member->getImageUrl(40) }}');" title="{{ $member->name }}" href="{{ route('characters.show', $member->id) }}"></a>
                    </td>
                    <td>
                        {!! $member->tooltipedLink() !!}
                    </td>
                    @if ($campaign->enabled('locations'))
                        <td class="hidden-xs hidden-sm">
                            @if ($member->location)
                                {!! $member->location->tooltipedLink() !!}
                            @endif
                        </td>
                    @endif
                    @if ($campaign->enabled('races'))
                        <td class="hidden-xs hidden-sm">
                            @foreach ($member->races as $race)
                                {!! $race->tooltipedLink() !!}
                            @endforeach
                        </td>
                    @endif
                    <td class="hidden-xs hidden-sm">{{ $member->sex }}</td>
                    <td>@if ($member->is_dead)<span class="ra ra-skull"></span>@endif</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $r->fragment('family-members')->links() }}
    </div>
</div>
