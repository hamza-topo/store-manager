<div class="mb-2">
    <div class="col-form-label">@lang('Customers Gender')</div>
    <div class="col">
        <div class="m-t-15 m-checkbox-inline custom-radio-ml">
            <div class="form-check form-check-inline radio radio-primary">
                <input class="form-check-input" id="radioinline8" type="radio" wire:model="campaign.criteria.gender" value="0">
                <label class="form-check-label mb-0" for="radioinline8">@lang('H')</label>
            </div>
            <div class="form-check form-check-inline radio radio-primary">
                <input class="form-check-input" id="radioinline9" type="radio" wire:model="campaign.criteria.gender" value="1">
                <label class="form-check-label mb-0" for="radioinline9">@lang('F')</label>
            </div>
            <div class="form-check form-check-inline radio radio-primary">
                <input class="form-check-input" id="radioinline10" type="radio" wire:model="campaign.criteria.gender" value="2" checked>
                <label class="form-check-label mb-0" for="radioinline10">@lang('All')</label>
            </div>
        </div>
    </div>

</div>