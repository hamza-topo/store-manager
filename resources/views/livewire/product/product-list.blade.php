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
                <button class="btn btn-square btn-primary btn-lg col-12" type="button"  title="@lang('lang.Apply')" >@lang('lang.Apply')</button>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ route('products.create') }}"
                title="@lang('New Product/Service')">@lang('lang.New Product/Service')</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="dt-ext table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>@lang('lang.wording')</th>
                                <th>@lang('lang.Store Name')</th>
                                <th>@lang('lang.Sell Price')</th>
                                <th>@lang('lang.Buy Price')</th>
                                <th>@lang('lang.Quantity')</th>
                                <th>@lang('lang.Action')</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
