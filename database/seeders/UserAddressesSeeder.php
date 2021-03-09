<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Database\Seeder;

class UserAddressesSeeder extends Seeder
{
    public function run()
    {
        User::all()->each(function (User $user) {
            UserAddress::factory()->count(random_int(1, 3))->create(['user_id' => $user->id]);
        });
    }
}
