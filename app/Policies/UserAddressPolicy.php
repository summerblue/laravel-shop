<?php

namespace App\Policies;

use App\Models\UserAddress;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserAddressPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function own(User $user, UserAddress $address)
    {
        return $address->user_id == $user->id;
    }
}
