<div>
    <div class="dt-ext table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>@lang('lang.Name')</th>
                    <th>@lang('lang.Last Name')</th>
                    <th>@lang('lang.Phone')</th>
                    <th>@lang('lang.Email')</th>
                    <th>@lang('lang.Active')</th>
                    <th>@lang('lang.Action')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($owners as $owner)
                    <tr>
                        <td>{{$owner->firstName}}</td>
                        <td>{{$owner->lastName}}</td>
                        <td>{{$owner->phone}}</td>
                        <td>{{$owner->email}}</td>
                        <td>{{$owner->isActive}}</td>
                        <td>
                            <button class="btn btn-danger btn-sm" type="button" wire:click='delete({{$owner->id}})'>@lang('lang.Delete')</button>
                            <a class="btn btn-info btn-sm" type="button" href="{{route('owners.edit',$owner->id)}}">@lang('lang.Edit')</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
