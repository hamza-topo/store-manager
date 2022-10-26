<div>
    <table class="display" id="advance-1">
        <thead>
            <tr>
                <th>@lang('Name')</th>
                <th>@lang('Type')</th>
                <th>@lang('stores')</th>
                <th>@lang('Total clients')</th>
                <th>@lang('Frais')</th>
                <th>@lang('Status')</th>
                <th>@lang('Derniere Activité')</th>
                <th>@lang('Action')</th>
            </tr>
        </thead>
        <tbody>
            @foreach($campaigns as $campaign)
            <tr>
                <td>{{$campaign->name}}</td>
                <td>{{$campaign->type === 0 ? 'email':'SMS'}}</td>
                <td>{{ isset($campaign->criteria['stores'])  ? implode(',',array_values($campaign->criteria['stores'])) : 'All'}}</td>
                <td></td>
                <td></td>
                <td>{{ !empty($campaign->deleted_at) ? 'supprimé': 'active'}}</td>
                <td>{{ $campaign->created_at}}</td>
                <td>
                    <button class="btn btn-danger" wire:click="delete({{$campaign->id}})">@lang('Supprimer')</button>
                </td>
                {{debug($campaign)}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>