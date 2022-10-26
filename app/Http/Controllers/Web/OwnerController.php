<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

class OwnerController extends Controller
{


    public function __construct(protected UserService $userService)
    {
    }

    public function index()
    {
        return view('admin.owners.list');
    }

    public function create()
    {
        return view('admin.owners.create');
    }
    public function edit(int $ownerId)
    {
        return view('admin.owners.edit', ['owner' => $this->userService->findById($ownerId)]);
    }
}
