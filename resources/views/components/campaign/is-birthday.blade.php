<div class="mb-2">
    <div class="col-form-label">@lang('Birthday ?')</div>
    <div class="col">
        <div class="m-t-15 m-checkbox-inline custom-radio-ml">
            <div class="form-check form-check-inline radio radio-primary">
                <input class="form-check-input" id="radioinline11" type="radio"  wire:model='campaign.criteria.is_birthday'  value="1">
                <label class="form-check-label mb-0"  for="radioinline11">@lang('Yes')</label>
            </div>
            <div class="form-check form-check-inline radio radio-primary">
                <input class="form-check-input" id="radioinline12" type="radio"  wire:model='campaign.criteria.is_birthday'  value="0" checked>
                <label class="form-check-label mb-0" for="radioinline12">@lang('No')</label>
            </div>
        </div>
    </div>
</div>