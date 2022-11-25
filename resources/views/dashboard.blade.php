
@if(auth()->user()->is_admin===App\Enums\User::ADMIN)
    <x-dashboard.admin></x-dashboard.admin>
@elseif(auth()->user()->is_admin===App\Enums\User::OWNER)
    <x-dashboard.admin></x-dashboard.admin>
@elseif(auth()->user()->is_admin===App\Enums\User::EMPLOYER)
   
@endif

