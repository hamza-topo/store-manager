<div>
    <div class="col-md-12 row">
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Fisrt Name')</label>
                <input class="form-control" id="validationDefault01" type="text" wire:model="owner.firstName"
                    placeholder="@lang('lang.Name')" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Last Name')</label>
                <input class="form-control" id="validationDefault01" type="text" wire:model="owner.lastName"
                    placeholder="@lang('lang.Last Name')" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.E-mail')</label>
                <input class="form-control" id="validationDefault01" type="email" wire:model="owner.email"
                    placeholder="@lang('lang.E-mail')" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Phone')</label>
                <input class="form-control" id="validationDefault01" type="email" wire:model="owner.phone"
                    placeholder="@lang('lang.Phone')" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Password')</label>
                <input class="form-control" id="validationDefault01" type="password" wire:model="owner.password"
                    placeholder="@lang('lang.Password')" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Password Confirmation')</label>
                <input class="form-control" id="validationDefault01" type="password" wire:model="owner.password_confirmation"
                    placeholder="@lang('Password Confirmation')" required>
            </div>
        </div>
        <div class="col-md-6 mt-4">
            <label for="validationDefault01" style="color:red">@lang('lang.Allow customer sharing between my stores?')</label>
            <div class="media-body icon-state switch-outline">
                <label class="switch">
                         <input type="checkbox" checked="true" wire:model="owner.allowShare"><span class="switch-state bg-primary"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="mt-3" style="text-align: right;">
        @if (empty($owner['id']))
            <button class="btn btn-primary " type="button" wire:click='save()'>@lang('lang.Save')</button>
            @if(!empty($ownerId))
                <a class=""  href='{{route('stores.create',['owner'=>$ownerId])}}'>@lang('lang.Continue to Store Config ? ')</a>
            @endif
        @else
            <button class="btn btn-primary " type="button" wire:click='update()'>@lang('lang.Update')</button>
        @endif
    </div>
</div>
