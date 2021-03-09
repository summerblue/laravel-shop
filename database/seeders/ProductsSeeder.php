<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        // 创建 30 个商品
        $products = \App\Models\Product::factory()->count(30)->create();
        foreach ($products as $product) {
            // 创建 3 个 SKU，并且每个 SKU 的 `product_id` 字段都设为当前循环的商品 id
            $skus = \App\Models\ProductSku::factory()->count(3)->create(['product_id' => $product->id]);
            // 找出价格最低的 SKU 价格，把商品价格设置为该价格
            $product->update(['price' => $skus->min('price')]);
        }
    }
}
