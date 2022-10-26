<div class="mb-2" wire:ignore>
    <div class="col-form-label">@lang('Stores')</div>
    <select class="js-example-basic-multiple col-sm-12" multiple="multiple" wire:model='campaign.criteria.stores'>
        <option value="ALL" selected>@lang('Tout')</option>
        @foreach($stores as $store)
        <option value="{{$store->id}}">{{$store->name}}</option>
        @endforeach
    </select>
</div>