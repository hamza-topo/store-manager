<?php

namespace App\View\Components\Campaign;

use Illuminate\View\Component;

class Reduction extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public array $campaign = [])
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.campaign.reduction');
    }
}
