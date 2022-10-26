<div>
    <div class="dt-ext table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>@lang('lang.Name')</th>
                    <th>@lang('lang.Description')</th>
                    <th>@lang('lang.Associated activitys')</th>
                    <th>@lang('lang.Actions')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activites as $activity)
                    <tr>
                        <td>{{$activity->name}}</td>
                        <td>{{$activity->description}}</td>
                        <td>{{$activity->stores->count()}}</td>
                        <td>
                            <button class="btn btn-danger btn-sm" type="button" wire:click='delete({{$activity->id}})'>@lang('lang.Delete')</button>
                            <a class="btn btn-info btn-sm" type="button" href="{{route('stores.edit',$activity->id)}}">@lang('lang.Edit')</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
