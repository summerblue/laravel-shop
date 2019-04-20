<?php

use Illuminate\Database\Seeder;

class CouponCodesSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Models\CouponCode::class, 20)->create();
    }
}
