<div class="mb-2 row">
    <div class="col-md-4">
        <div class="col-form-label">@lang('Affected Customers ')</div>
        <input class="datepicker-here form-control digits" type="text"  wire:model='campaign.criteria.customers_between' data-range="true" data-multiple-dates-separator=" - " data-language="en">
    </div>
    <div class="col-md-4">
        <div class="col-form-label">@lang('Last Visit')</div>
        <input class="datepicker-here form-control digits" type="text"  wire:model='campaign.criteria.visits_between' data-range="true" data-multiple-dates-separator=" - " data-language="en">
    </div>
</div>