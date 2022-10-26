<?php

namespace App\View\Components\Campaign;

use App\Models\Campaign;
use Illuminate\View\Component;

class CampaignLine extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public Campaign $campaign)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.campaign.campaign-line');
    }
}
