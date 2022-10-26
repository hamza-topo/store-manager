<div class="mb-2" wire:ignore>
    <div class="col-form-label">@lang('Products/Services')</div>
    <select class="js-example-basic-multiple col-sm-12" multiple="multiple">
        @for($i=0;$i<20;$i++) <option value="{{$i}}">T-shirt {{$i}}</option>
            @endfor
    </select>
</div>