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
                         <th>@lang('lang.Points')</th>
                         <th>@lang('lang.Action')</th>
                    </tr>
               </thead>
               <tbody>
                    @foreach ($customers as $customer)
                    <tr>
                         <td>{{$customer->store->name}}</td>
                         <td>{{$customer->firstname}}</td>
                         <td>{{$customer->lastname}}</td>
                         <td>{{$customer->phone}}</td>
                         <td>{{$customer->email}}</td>
                         <td>{{$customer->points}}</td>
                         <td>
                              <button class="btn btn-danger btn-sm" type="button" wire:click='delete({{$customer->id}})'>@lang('lang.Delete')</button>
                              <a class="btn btn-info btn-sm" type="button" href="{{route('customers.edit',$customer->id)}}">@lang('lang.Edit')</a>
                         </td>
                    </tr>
                    @endforeach
               </tbody>
          </table>
     </div>
</div>