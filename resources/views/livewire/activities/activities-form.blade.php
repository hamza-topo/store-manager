<div>
    <div class="col-md-12 row">
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Name')</label>
                <input class="form-control" id="validationDefault01" type="text" wire:model="activity.name"
                    placeholder="@lang('lang.Name')" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Description')</label>
                <textarea class="form-control" id="validationDefault01" type="password"
                    wire:model="activity.description"></textarea>
            </div>
        </div>
    </div>
    <div class="mt-3" style="text-align: right;">
        <button class="btn btn-primary " type="button" wire:click='save()'>@lang('lang.Save')</button>
    </div>
</div>
