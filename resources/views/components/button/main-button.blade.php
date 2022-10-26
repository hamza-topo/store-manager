<div class="card-footer right" style="display: flex;justify-content: space-between;align-items: flex-start;">
    @if(!isset($el['id']))
    <button class="btn btn-primary"     wire:click='create()'>@lang('Create')</button>
    @else
    <button class="btn btn-primary"    wire:click='update()'>@lang('Edit')</button>
    <button class="btn btn-secondary"  wire:click='delete()'>@lang('Supprimer')</button>
    @endif
</div>