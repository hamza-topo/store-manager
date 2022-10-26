<div>
@if($stores->count() > 0)
<div class="col-md-12 row">
    <div class="col-md-12">
        <div class="mb-2">
            <div class="col-form-label">@lang('lang.Stores')</div>
            <select class="col-sm-12" wire:model.lazy="product.storeId">
                <option value="-1">@lang('lang.Choose a Store')</option>
                @foreach ($stores as $store)
                    <option value="{{$store->id}}">{{ $store->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-2">
            <label for="validationDefault01">@lang('lang.Label')</label>
            <input class="form-control" id="validationDefault01" type="text" wire:model="product.label"
                placeholder="@lang('lang.Label')" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-2">
            <label for="validationDefault01">@lang('lang.Quantity')</label>
            <input class="form-control" id="validationDefault01" type="text" wire:model="product.quantity"
                placeholder="@lang('lang.Quantity')" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-2">
            <label for="validationDefault01">@lang('lang.Price')</label>
            <input class="form-control" id="validationDefault01" type="text" wire:model="product.price"
                placeholder="@lang('lang.Price')" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-2">
            <label for="validationDefault01">@lang('lang.Buy Price')</label>
            <input class="form-control" id="validationDefault01" type="text" wire:model="product.buyPrice"
                placeholder="@lang('lang.Buy Price')" required>
        </div>
    </div>
</div>
<div class="mt-3" style="text-align: right;">
    @if (empty($product['id']))
        <button class="btn btn-primary " type="button" wire:click='save()'>@lang('lang.Save')</button>
    @else
        <button class="btn btn-primary " type="button" wire:click='update()'>@lang('lang.Update')</button>
    @endif
</div>
@else
<x-tools.empty-data-message />
@endif
</div>
