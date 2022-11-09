<div>
    <div class="col-md-12 row">
        <div class="col-md-12">
            <div class="mb-2">
                <div class="col-form-label">@lang('lang.Stores')</div>
                <select class="col-sm-12" wire:model.lazy="customer.storeId">
                    <option value="-1">@lang('lang.Choose a Store')</option>
                    @foreach ($stores as $store)
                    <option value="{{$store->id}}">{{ $store->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @if(!$stores->isEmpty() && isset($customer['storeId']) && $customer['storeId'] != -1 )
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Fisrt Name')</label>
                <input class="form-control" id="validationDefault01" type="text" wire:model="customer.firstname" placeholder="@lang('lang.Name')" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Last Name')</label>
                <input class="form-control" id="validationDefault01" type="text" wire:model="customer.lastname" placeholder="@lang('lang.Last Name')">
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.E-mail')</label>
                <input class="form-control" id="validationDefault01" type="email" wire:model="customer.email" placeholder="@lang('lang.E-mail')" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Phone')</label>
                <input class="form-control" id="validationDefault01" type="email" wire:model="customer.phone" placeholder="@lang('lang.Phone')" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Birth Day')</label>
                <input class="form-control" id="validationDefault01" type="date" wire:model="customer.birth" placeholder="@lang('lang.Phone')" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Gender')</label>
                <div class="d-block">
                    <label class="me-3" for="edo-ani">
                        <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" wire:model="customer.sexe" value="{{App\Enums\Gender::MALE}}" checked=""><span>@lang('lang.Male')</span>
                    </label>
                    <label for="edo-ani1">
                        <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani" wire:model="customer.sexe" value="{{App\Enums\Gender::FEMALE}}"><span>@lang('lang.Female')</span>
                    </label>
                </div>
            </div>
        </div>
        @else
        <x-tools.empty-data-message />
        @endif
    </div>
    <div class="mt-3" style="text-align: right;">
        @if (empty($owner['id']))
        <button class="btn btn-primary " type="button" wire:click='save()'>@lang('lang.Save')</button>
        @if (!empty($ownerId))
        <a class="" href='{{ route('stores.create', ['owner' => $ownerId]) }}'>@lang('lang.Continue
            to Store Config ? ')</a>
        @endif
        @else
        <button class="btn btn-primary " type="button" wire:click='update()'>@lang('lang.Update')</button>
        @endif
    </div>
</div>