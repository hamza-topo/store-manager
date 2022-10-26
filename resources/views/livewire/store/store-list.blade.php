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
                            <button class="btn btn-danger btn-sm" type="button" wire:click='delete({{$store->id}})'>@lang('lang.Delete')</button>
                            <a class="btn btn-info btn-sm" type="button" href="{{route('stores.edit',$store->id)}}">@lang('lang.Edit')</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
