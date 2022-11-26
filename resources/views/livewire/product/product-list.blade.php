<div>
    <div>
        <div class="card">
            <div class="card-header">
                @lang('lang.Filters')
            </div>
            <div class="card-body row">
                <div class="col-4">
                    <select class="form-select" size="1" wire:model='storeId'>
                        <option value="0">@lang('lang.Select Store')</option>
                        @foreach ($stores as $store)
                        <option value="{{$store->id}}">{{$store->name}} | {{$store->address}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-4">
                    <input type="file" class="form-select" wire:model='productsUpload'>
                </div>
                <div class="col-4">
                    <button class="btn btn-square btn-primary btn-lg col-12" type="button" title="@lang('lang.Apply')">@lang('lang.Apply')</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-primary" href="{{ route('products.create') }}" title="@lang('New Product/Service')">@lang('lang.New Product/Service')</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="dt-ext table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>@lang('lang.thumbnail')</th>
                                    <th>@lang('lang.Store Name')</th>
                                    <th>@lang('lang.Sell Price')</th>
                                    <th>@lang('lang.Buy Price')</th>
                                    <th>@lang('lang.Quantity')</th>
                                    <th>@lang('lang.Action')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td> {{--<img src="{{asset($product->image)}}" alt="">--}}</td>
                                    <td>{{$product->store->name}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->buy_price}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm" type="button" wire:click='delete({{$product->id}})'>@lang('lang.Delete')</button>
                                        <a class="btn btn-info btn-sm" type="button" href="{{route('products.edit',$product->id)}}">@lang('lang.Edit')</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>