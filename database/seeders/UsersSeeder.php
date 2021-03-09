<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        \App\Models\User::factory()->count(10)->create();
    }
}
