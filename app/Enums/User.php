<?php

namespace App\Enums;

class User extends Enum
{

    const LIST_EMPLOYERS    = 'list_employers';
    const LIST_OWNERS    = 'list_owners';
    const IS_OWNER         = 1;
    const IS_EMPLOYER         = 2;
    const CACHE_TIME        = 28800;
}
