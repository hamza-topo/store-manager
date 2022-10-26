<div>
    <div class="col-md-12 row">
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Name')</label>
                <input class="form-control" id="validationDefault01" type="text" wire:model="store.name"
                    placeholder="@lang('lang.Name')" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Sender id')</label>
                <input class="form-control" id="validationDefault01" type="text" wire:model="store.senderId"
                    placeholder="@lang('lang.Sender id')" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <div class="col-form-label">@lang('lang.Activities')</div>
                <select class="js-example-basic-multiple col-sm-12" wire:model="store.activityId">
                    <option value="ALL">@lang('Tout')</option>
                    <option value="1">Magasin</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <div class="col-form-label">@lang('lang.Owners')</div>
                <select class="col-sm-12" wire:model="store.ownerId">
                    <option value="null">@lang('Choose The Owner')</option>
                    @foreach ($owners as $owner)
                        <option value="{{$owner->id}}"  {{  isset($_GET['owner']) &&$_GET['owner'] == $owner->id ? 'selected':'' }}  >{{$owner->firstName}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Contact Name')</label>
                <input class="form-control" id="validationDefault01" type="text" wire:model='store.contact'
                    placeholder="@lang('lang.Contact Name')" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Contact Phone')</label>
                <input class="form-control" id="validationDefault01" type="phone" wire:model='store.phone'
                    placeholder="@lang('lang.Contact Phone')" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label class="col-form-label" for="exampleInputEmail1">@lang('lang.Address')</label>
                <textarea class="form-control textarea" rows="3" cols="50" placeholder="@lang('lang.Address')"
                    wire:model='store.address'></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.Store Logo')</label>
                <input class="form-control" id="validationDefault01" type="file" wire:model="logo"
                    placeholder="@lang('lang.Store Logo')" required>
            </div>
            @if (!empty($logo) && !isset($store['id']))
                <div class="media media mt-2 mb-2">
                    <div class="media-size-email"><img class="me-3 rounded-circle" style="width: 75px;height:75px"
                            src="{{ $logo->temporaryUrl() }}"></div>
                    <div class="media-body">
                        <h6>{{ isset($store['name']) ? $store['name'] : '' }}<small></small></h6>
                        <p>{{ isset($store['adress']) ? $store['adress'] : '' }}</p>
                    </div>
                </div>
            @endif
            @if (empty($logo) && isset($store['id']))
                <div class="media media mt-2 mb-2">
                    <div class="media-size-email"><img class="me-3 rounded-circle" style="width: 75px;height:75px"
                            src="{{ storage_path($store['logo']) }}"></div>
                    <div class="media-body">
                        <h6>{{ isset($store['name']) ? $store['name'] : '' }}<small></small></h6>
                        <p>{{ isset($store['adress']) ? $store['adress'] : '' }}</p>
                    </div>
                </div>
            @endif
            @if (!empty($logo) && isset($store['id']))
                <div class="media media mt-2 mb-2">
                    <div class="media-size-email"><img class="me-3 rounded-circle" style="width: 75px;height:75px"
                            src="{{ $logo->temporaryUrl() }}"></div>
                    <div class="media-body">
                        <h6>{{ isset($store['name']) ? $store['name'] : '' }}<small></small></h6>
                        <p>{{ isset($store['adress']) ? $store['adress'] : '' }}</p>
                    </div>
                </div>
            @endif
        </div>
        <div class="col-md-6">
            <div class="mb-2">
                <label for="validationDefault01">@lang('lang.TVA')</label>
                <input class="form-control" id="validationDefault01" type="text" wire:model="store.tva"
                    placeholder="@lang('lang.TVA')" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-2 email-wrapper">
                <div class="theme-form">
                    <div wire:ignore>
                        <label class="text-muted">@lang('lang.Invoice Message Print')</label>
                        <textarea id="text-box" name="text-box" cols="10" rows="2" wire:model="store.messageInvoice"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3" style="text-align: right;">
        @if (!isset($store['id']))
            <button class="btn btn-primary " type="button" wire:click='save()'>@lang('lang.Save')</button>
        @else
            <button class="btn btn-primary " type="button" wire:click='update()'>@lang('lang.Update')</button>
        @endif
    </div>
</div>
