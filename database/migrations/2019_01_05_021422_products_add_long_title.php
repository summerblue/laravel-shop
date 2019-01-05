<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsAddLongTitle extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('long_title')->after('title');
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('long_title');
        });
    }
}
