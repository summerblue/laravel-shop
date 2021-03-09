<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CouponCodesSeeder extends Seeder
{
    public function run()
    {
        \App\Models\CouponCode::factory()->count(20)->create();
    }
}
