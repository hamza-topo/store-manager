<div class="mb-2">
    <div class="col-form-label">@lang('is Cross-selling?')</div>
    <div class="col">
        <div class="m-t-15 m-checkbox-inline custom-radio-ml">
            <div class="form-check form-check-inline radio radio-primary">
                <input class="form-check-input" id="radioinline14" type="radio" wire:model="campaign.criteria.is_cross_selling" value="1">
                <label class="form-check-label mb-0" for="radioinline14">@lang('Yes')</label>
            </div>
            <div class="form-check form-check-inline radio radio-primary">
                <input class="form-check-input" id="radioinline15" type="radio" wire:model='campaign.criteria.is_cross_selling' value="0" checked>
                <label class="form-check-label mb-0" for="radioinline15">@lang('No')</label>
            </div>
        </div>
    </div>
</div>