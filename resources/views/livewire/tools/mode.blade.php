<div>
    <div class="mode">
        @if(session()->get('dark-only') === 'dark-only')
        <i class="fa fa-moon-o" wire:click='setMode("")'></i>
        @else
        <i class="fa fa-lightbulb-o" wire:click='setMode("dark-only")'></i>
        @endif
    </div>
</div>