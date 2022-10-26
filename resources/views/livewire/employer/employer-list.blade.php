<div>
    <div class="dt-ext table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>@lang('lang.Store')</th>
                    <th>@lang('lang.Name')</th>
                    <th>@lang('lang.Last Name')</th>
                    <th>@lang('lang.Phone')</th>
                    <th>@lang('lang.Email')</th>
                    <th>@lang('lang.Active')</th>
                    <th>@lang('lang.Action')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employers as $employer)
                    <tr>
                        <td>{{$employer->store->name}}</td>
                        <td>{{$employer->firstName}}</td>
                        <td>{{$employer->lastName}}</td>
                        <td>{{$employer->phone}}</td>
                        <td>{{$employer->email}}</td>
                        <td>{{$employer->isActive}}</td>
                        <td>
                            <button class="btn btn-danger btn-sm" type="button" wire:click='delete({{$employer->id}})'>@lang('lang.Delete')</button>
                            <a class="btn btn-info btn-sm" type="button" href="{{route('employers.edit',$employer->id)}}">@lang('lang.Edit')</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
