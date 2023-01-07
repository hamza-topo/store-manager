<?php

namespace App\Services;

use App\Enums\User as EnumsUser;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class UserService implements Service
{

    public function create(array $user = []): User
    {
        return User::create($user);
    }

    public function edit(int $id, array $user = [])
    {
        $newUser = $this->findById($id);
        $newUser->update($user);
        $newUser->refresh();
        return $newUser;
    }

    public function delete(int $id)
    {
        return User::destroy($id);
    }

    public function findById(int $id)
    {
        return User::find($id);
    }

    public function getOwners(): Collection
    {
        return  Cache::remember(EnumsUser::LIST_OWNERS, EnumsUser::CACHE_TIME, function () {
            return  User::where('is_admin', EnumsUser::OWNER)->with('stores')->get();
        });
    }

    public function getEmployers(): Collection
    {
        return  Cache::remember(EnumsUser::LIST_EMPLOYERS, EnumsUser::CACHE_TIME, function () {
            return User::where('is_admin', EnumsUser::EMPLOYER)->with('store')->get();
        });
    }

    public function getAll()
    {
        return 'this function is diseabled for this method';
    }

    public function clearCache()
    {
        Cache::forget(EnumsUser::LIST_EMPLOYERS);
        Cache::forget(EnumsUser::LIST_OWNERS);
    }
}
