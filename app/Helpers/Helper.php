<?php

use App\Enums\User;
use Illuminate\Support\Carbon;

if (!function_exists('formatDate')) {
    function formatDate(string $date)
    {
        return Carbon::parse($date)->format('d/m/Y');
    }
}

if (!function_exists('role')) {
    function role(int $roleId)
    {
        switch ($roleId) {
            case User::ADMIN:
                return __('Admin');
                break;
            case User::OWNER:
                return __('Owner');
                break;
            case User::EMPLOYER:
                return __('Employee');
                break;
            default:
                return __('Unknown');
                break;
        }
    }
}
