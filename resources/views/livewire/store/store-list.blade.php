<div>
    <div class="dt-ext table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>@lang('lang.Name')</th>
                    <th>@lang('lang.Sender Id')</th>
                    <th>@lang('lang.Owner')</th>
                    <th>@lang('lang.Activity')</th>
                    <th>@lang('lang.Tva')</th>
                    <th>@lang('lang.Phone')</th>
                    <th>@lang('lang.Actions')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stores as $store)
                <tr>
                    <td>{{$store->name}}</td>
                    <td>{{$store->senderId}}</td>
                    <td>{{$store->ownerId}}</td>
                    <td>{{$store->activityId}}</td>
                    <td>{{$store->tva}}</td>
                    <td>{{$store->phone}}</td>
                    <td>
                        <a class="text-danger" href="#"  wire:click='delete({{$store->id}})'><i data-feather="trash-2"></i></a>
                        <a class="text-secondary" href="{{route('stores.edit',$store->id)}}"><i data-feather="edit-2"></i></a>
                        <a><i data-feather="info"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>