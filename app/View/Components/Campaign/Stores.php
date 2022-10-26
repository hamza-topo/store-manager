<?php

namespace App\View\Components\Campaign;

use App\Services\StoreService;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Stores extends Component
{

    public Collection $stores ;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(protected StoreService $storeService)
    {
        $this->stores = $storeService->getAll();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.campaign.stores');
    }
}
