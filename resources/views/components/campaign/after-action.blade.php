<div class="mb-2">
    <div class="col-form-label">@lang('After Action')</div>
    <div class="col">
        <div class="m-t-15 m-checkbox-inline custom-radio-ml">
            <div class="form-check form-check-inline radio radio-primary">
                <input class="form-check-input" id="radioinline7" type="radio" wire:model="campaign.criteria.after_action" value="0">
                <label class="form-check-label mb-0" for="radioinline7">@lang('new Customer')</label>
            </div>
            <div class="form-check form-check-inline radio radio-primary">
                <input class="form-check-input" id="radioinline6" type="radio" wire:model="campaign.criteria.after_action" value="1">
                <label class="form-check-label mb-0" for="radioinline6">@lang('Invoice Created')</label>
            </div>
        </div>
    </div>
</div>