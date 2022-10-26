<?php

namespace App\Http\Livewire\Tools;

use Livewire\Component;

class Mode extends Component
{
    public function setMode(string $mode = '')
    {
        session()->put('dark-only', $mode);
    }
    public function render()
    {
        return view('livewire.tools.mode');
    }
}
