<div class="mb-2">
    <div class="col-form-label">@lang('Campaign UNIQUE/BULK')</div>
    <div class="col">
        <div class="m-t-15 m-checkbox-inline custom-radio-ml">
            <div class="form-check form-check-inline radio radio-primary">
                <input class="form-check-input" id="radioinline4" type="radio" wire:model="campaign.is_bulk" value="0"  title="">
                <label class="form-check-label mb-0" for="radioinline4">@lang('unique')</label>
            </div>
            <div class="form-check form-check-inline radio radio-primary">
                <input class="form-check-input" id="radioinline5" type="radio" wire:model="campaign.is_bulk" value="1"  title="">
                <label class="form-check-label mb-0" for="radioinline5">@lang('Bulk')</label>
            </div>
        </div>
    </div>
</div>