<?php

use Illuminate\Support\Carbon;

if (!function_exists('formatDate')) {
    function formatDate(string $date)
    {
        return Carbon::parse($date)->format('d/m/Y');
    }
}