<div class="mb-2">
    <div class="col-form-label">@lang('Campaign Type')</div>
    <div class="col">
        <div class="m-t-15 m-checkbox-inline custom-radio-ml">
            <div class="form-check form-check-inline radio radio-primary">
                <input class="form-check-input" id="radioinline1"  type="radio"  wire:model='campaign.type' value="0"  title="">
                <label class="form-check-label mb-0" for="radioinline1">@lang('E-mail')</label>
            </div>
            <div class="form-check form-check-inline radio radio-primary">
                <input class="form-check-input" id="radioinline2"  type="radio" wire:model='campaign.type' value="1"  title="">
                <label class="form-check-label mb-0" for="radioinline2">@lang('SMS')</label>
            </div>
            <div class="form-check form-check-inline radio radio-primary">
                <input class="form-check-input" id="radioinline3"  type="radio" wire:model='campaign.type' value="2"  title="" checked>
                <label class="form-check-label mb-0" for="radioinline3">@lang('TOUT')</label>
            </div>
        </div>
    </div>
</div>