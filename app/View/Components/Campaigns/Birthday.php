<?php

namespace App\View\Components\Campaigns;

use Illuminate\View\Component;

class Birthday extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public array $birthday = [])
    {
    
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.campaigns.birthday');
    }
}
