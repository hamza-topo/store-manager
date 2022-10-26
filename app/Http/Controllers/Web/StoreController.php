<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\StoreService;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function __construct(public StoreService $storeService)
    {
    }

    public function index()
    {
        return view('admin.stores.list');
    }

    public function create()
    {
        return view('admin.stores.create');
    }

    public function edit(int $storeId)
    {

        return view('admin.stores.edit', ['store' => $this->storeService->findById($storeId)]);
    }
}
