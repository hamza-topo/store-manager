<div>
    <div class="col-md-12 row">
        <div class="col-md-12">
            <div class="mb-2">
                <div class="col-form-label">@lang('lang.Stores')</div>
                <select class="col-sm-12" wire:model.lazy="employer.storeId">
                    <option value="-1">@lang('lang.Choose a Store')</option>
                    @foreach ($stores as $store)
                        <option value="{{$store->id}}">{{ $store->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        @if(!$stores->isEmpty())
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Fisrt Name')</label>
                <input class="form-control" id="validationDefault01" type="text" wire:model="employer.firstName"
                    placeholder="@lang('lang.Name')" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Last Name')</label>
                <input class="form-control" id="validationDefault01" type="text" wire:model="employer.lastName"
                    placeholder="@lang('lang.Last Name')" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.E-mail')</label>
                <input class="form-control" id="validationDefault01" type="email" wire:model="employer.email"
                    placeholder="@lang('lang.E-mail')" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Phone')</label>
                <input class="form-control" id="validationDefault01" type="email" wire:model="employer.phone"
                    placeholder="@lang('lang.Phone')" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Password')</label>
                <input class="form-control" id="validationDefault01" type="password" wire:model="employer.password"
                    placeholder="@lang('lang.Password')" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Password Confirmation')</label>
                <input class="form-control" id="validationDefault01" type="password"
                    wire:model="employer.password_confirmation" placeholder="@lang('Password Confirmation')" required>
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
