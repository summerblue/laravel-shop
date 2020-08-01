<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class DDRProductsSeeder extends Seeder
{
    public function run()
    {
        $productData = [
            [
                "title"       => "Kingston/金士顿 HX424C15FB/8",
                "long_title"  => "金士顿 骇客神条 ddr4 2400 8g 台式机 电脑 四代内存条 吃鸡内存",
                "description" => '<p><img src="https://img.alicdn.com/imgextra/i3/704392951/TB25akyqsuYBuNkSmRyXXcA3pXa_!!704392951.jpg" /><img src="https://img.alicdn.com/imgextra/i1/704392951/TB288x6y25TBuNjSspmXXaDRVXa_!!704392951.jpg" /><img src="https://img.alicdn.com/imgextra/i1/704392951/TB2ck46y7CWBuNjy0FaXXXUlXXa_!!704392951.jpg" /><img src="https://img.alicdn.com/imgextra/i2/704392951/TB2_OV3y1uSBuNjSsziXXbq8pXa_!!704392951.jpg" /><img src="https://img.alicdn.com/imgextra/i3/704392951/TB2F9KZiP7nBKNjSZLeXXbxCFXa_!!704392951.jpg" /><img src="https://img.alicdn.com/imgextra/i4/704392951/TB2XQ06y7CWBuNjy0FaXXXUlXXa_!!704392951.jpg" /><img src="https://img.alicdn.com/imgextra/i2/704392951/TB20Tl7y4SYBuNjSspjXXX73VXa_!!704392951.jpg" /><img src="https://img.alicdn.com/imgextra/i2/704392951/TB2QygAqDdYBeNkSmLyXXXfnVXa_!!704392951.jpg" /><img src="https://img.alicdn.com/imgextra/i3/704392951/TB2C6S5qyCYBuNkHFCcXXcHtVXa_!!704392951.jpg" /><img src="https://img.alicdn.com/imgextra/i2/704392951/TB2J_pByYGYBuNjy0FoXXciBFXa_!!704392951.jpg" /><img src="https://img.alicdn.com/imgextra/i2/704392951/TB2520Ny29TBuNjy1zbXXXpepXa_!!704392951.jpg" /><img src="https://img.alicdn.com/imgextra/i4/704392951/TB2ozkLyFmWBuNjSspdXXbugXXa_!!704392951.jpg" /><img src="https://img.alicdn.com/imgextra/i4/704392951/TB2S9IFiOAnBKNjSZFvXXaTKXXa_!!704392951.jpg" /></p><p><img alt="" src="https://gdp.alicdn.com/imgextra/i4/704392951/TB2KpHwfviSBuNkSnhJXXbDcpXa_!!704392951.jpg" /></p>',
                "image"       => "https://img.alicdn.com/bao/uploaded/i2/TB1iqkaLVXXXXagXXXXObG1FpXX_091208.jpg_b.jpg",
                "price"       => "399.00",
                "skus"        => [
                    ["title" => "8GB 黑色", "description" => "8GB 2400 DDR4 黑色", "price" => "549.00"],
                    ["title" => "8GB 绿色", "description" => "8GB 2400 DDR4 绿色", "price" => "529.00"],
                    ["title" => "16GB", "description" => "2400 16GB", "price" => "1299.00"],
                    ["title" => "4GB", "description" => "2400 4GB", "price" => "399.00"],
                ],
                "properties"  => [
                    ["name" => "品牌名称", "value" => "金士顿"],
                    ["name" => "内存容量", "value" => "8GB"],
                    ["name" => "传输类型", "value" => "DDR4"],
                    ["name" => "内存容量", "value" => "4GB"],
                    ["name" => "内存容量", "value" => "16GB"],
                ],
            ],
            [
                "title"       => "AData/威刚 8G DDR4 2400 (XPG 单条） ",
                "long_title"  => "ADATA/威刚 8G 16G 3200 3000 2666 2400游戏台式机内存条DDR4套条",
                "description" => '<p><img src="https://img.alicdn.com/imgextra/i4/2133729733/TB2LYbVxFOWBuNjy0FiXXXFxVXa_!!2133729733.jpg" /><br /><a href = "https://detail.tmall.com/item.htm?spm=a1z10.5-b-s.w4011-16853183550.96.20b86fd1MBVKRL&id=40645526570&rn=d717312a898e0fb53e74b1c2db2c2232&abbucket=12" target = "_self" ><img src = "https://img.alicdn.com/imgextra/i2/2133729733/TB2zEdobrZnBKNjSZFhXXc.oXXa_!!2133729733.jpg" /><img src = "https://img.alicdn.com/imgextra/i1/2133729733/TB2W3VPbWmWBuNjy1XaXXXCbXXa_!!2133729733.jpg" /></a ><br /><img src = "https://img.alicdn.com/imgextra/i1/2133729733/TB2NLaeaQyWBuNjy0FpXXassXXa_!!2133729733.jpg" /><img src = "https://img.alicdn.com/imgextra/i4/2133729733/TB2hvRtfamgSKJjSsphXXcy1VXa_!!2133729733.jpg" /><img src = "https://img.alicdn.com/imgextra/i2/2133729733/TB2DFptaXXXXXaOXXXXXXXXXXXX_!!2133729733.jpg" /><img src = "https://img.alicdn.com/imgextra/i4/2133729733/TB2mAUhkCFjpuFjSszhXXaBuVXa_!!2133729733.jpg_q90.jpg" /><img src = "https://img.alicdn.com/imgextra/i1/2133729733/TB2aU8kaXXXXXbbXpXXXXXXXXXX_!!2133729733.jpg" /><img src = "https://img.alicdn.com/imgextra/i3/2133729733/TB2Nhf8cRfM8KJjSZFrXXXSdXXa_!!2133729733.jpg" /><img src = "https://img.alicdn.com/imgextra/i1/2133729733/TB2h0oEhSYH8KJjSspdXXcRgVXa_!!2133729733.jpg" /><img src = "https://img.alicdn.com/imgextra/i2/2133729733/TB202q8gP3z9KJjy0FmXXXiwXXa_!!2133729733.jpg" /><img src = "https://img.alicdn.com/imgextra/i3/2133729733/TB2kRllh0nJ8KJjSszdXXaxuFXa_!!2133729733.jpg" /><img src = "https://img.alicdn.com/imgextra/i3/2133729733/TB2BXY3cqzB9uJjSZFMXXXq4XXa_!!2133729733.jpg" /></p >',
                "image"       => "https://img.alicdn.com/bao/uploaded/i4/TB1URYGHVXXXXXsaXXXtD198VXX_032444.jpg_b.jpg",
                "price"       => "489.00",
                "skus"        => [
                    ["title" => "8GB DDR4 2400", "description" => "8GB DDR4 2400 XPG单条", "price" => "489.00"],
                    ["title" => "4GB 万紫千红 DDR4 2133", "description" => "4GB 万紫千红 DDR4 2133", "price" => "489.00"],
                ],
                "properties"  => [
                    ["name" => "品牌名称", "value" => "威刚"],
                    ["name" => "传输类型", "value" => "DDR4"],
                    ["name" => "内存容量", "value" => "4GB"],
                    ["name" => "内存容量", "value" => "8GB"],
                ],
            ],
            [
                "title"       => "Kingston/金士顿 金士顿DDR3 1600 8GB",
                "long_title"  => "Kingston/金士顿 DDR3 1600 8G 台式机电脑 三代 内存条 兼容1333",
                "description" => '<p><img src="https://img.alicdn.com/imgextra/i4/704392951/TB2Y5OKqOOYBuNjSsD4XXbSkFXa_!!704392951.jpg" /><img src="https://img.alicdn.com/imgextra/i1/704392951/TB2cQS8y29TBuNjy0FcXXbeiFXa_!!704392951.jpg" /><img src="https://img.alicdn.com/imgextra/i4/704392951/TB2GrWfqIyYBuNkSnfoXXcWgVXa_!!704392951.jpg" /><img src="https://img.alicdn.com/imgextra/i2/704392951/TB2.Onyy7yWBuNjy0FpXXassXXa_!!704392951.jpg" /><img src="https://img.alicdn.com/imgextra/i3/704392951/TB2yEnCy29TBuNjy1zbXXXpepXa_!!704392951.jpg" /><img src="https://img.alicdn.com/imgextra/i2/704392951/TB2Urm1y7KWBuNjy1zjXXcOypXa_!!704392951.jpg" /></p><p><img alt = "" src = "https://gdp.alicdn.com/imgextra/i4/704392951/TB2KpHwfviSBuNkSnhJXXbDcpXa_!!704392951.jpg" /></p >',
                "image"       => "https://img.alicdn.com/bao/uploaded/i5/TB1up8DGXXXXXaAaXXXszso_pXX_060025.jpg_b.jpg",
                "price"       => "239.00",
                "skus"        => [
                    ["title" => "DDR3 1600 8G", "description" => "DDR3 1600 8G", "price" => "439.00"],
                    ["title" => "DDR3 1600 4G", "description" => "DDR3 1600 4G", "price" => "239.00"],
                    ["title" => "DDR3 1333 4G", "description" => "DDR3 1333 4G", "price" => "259.00"],
                ],
                "properties"  => [
                    ["name" => "品牌名称", "value" => "金士顿"],
                    ["name" => "传输类型", "value" => "DDR3"],
                    ["name" => "内存容量", "value" => "4GB"],
                    ["name" => "内存容量", "value" => "8GB"],
                ],
            ],
            [
                "title"       => "影驰 Gamer DDR4-2133 8G ",
                "long_title"  => "影驰 Gamer DDR4-2400/3000 8G/8G*2 单条/套条 台式机呼吸内存条",
                "description" => '<p><img src="https://img.alicdn.com/imgextra/i4/2731691808/TB2o._izipnpuFjSZFkXXc4ZpXa_!!2731691808.jpg" /><img src="https://img.alicdn.com/imgextra/i2/2731691808/TB2eORYmvDH8KJjy1XcXXcpdXXa_!!2731691808.jpg" /><img src="https://img.alicdn.com/imgextra/i4/2731691808/TB21XTzm22H8KJjy0FcXXaDlFXa_!!2731691808.jpg" /><img src="https://img.alicdn.com/imgextra/i2/2731691808/TB21Sflm46I8KJjSszfXXaZVXXa_!!2731691808.jpg" /><img src="https://img.alicdn.com/imgextra/i4/2731691808/TB29lrSmZjI8KJjSsppXXXbyVXa_!!2731691808.jpg" /><img src="https://img.alicdn.com/imgextra/i4/2731691808/TB2kZUBm4PI8KJjSspfXXcCFXXa_!!2731691808.jpg" /><img src="https://img.alicdn.com/imgextra/i1/2731691808/TB2QAraeqLN8KJjSZFvXXXW8VXa_!!2731691808.jpg" /><img src="https://img.alicdn.com/imgextra/i4/2731691808/TB2eAwMmgvD8KJjSsplXXaIEFXa_!!2731691808.jpg" /><img src="https://img.alicdn.com/imgextra/i4/2731691808/TB2gCV_mxPI8KJjSspfXXcCFXXa_!!2731691808.jpg" /><img src="https://img.alicdn.com/imgextra/i2/2731691808/TB2fZ.glj3z9KJjy0FmXXXiwXXa_!!2731691808.jpg" /></p><p><img src = "https://gdp.alicdn.com/imgextra/i3/2731691808/TB2fOzyi_mWBKNjSZFBXXXxUFXa_!!2731691808.jpg" /></p >',
                "image"       => "https://img.alicdn.com/bao/uploaded/i3/TB1oIQJKVXXXXc3XXXXa0s37FXX_013328.jpg_b.jpg",
                "price"       => "489.00",
                "skus"        => [
                    ["title" => "16GB 3000", "description" => "16GB 3000 8GB*2", "price" => "1199.00"],
                    ["title" => "16GB 3600", "description" => "16GB 3600 8GB*2", "price" => "1379.00"],
                    ["title" => "8GB 2400", "description" => "8GB 2400 DDR4", "price" => "489.00"],
                    ["title" => "8GB 3000", "description" => "8GB 3000 DDR4", "price" => "519.00"],
                ],
                "properties"  => [
                    ["name" => "品牌名称", "value" => "影驰"],
                    ["name" => "传输类型", "value" => "DDR4"],
                    ["name" => "内存容量", "value" => "8GB"],
                    ["name" => "内存容量", "value" => "16GB"],
                ],
            ],
            [
                "title"       => "美商海盗船 LPX系列 ",
                "long_title"  => "美商海盗船复仇者DDR4 8G 2400内存条电脑台式主机吃鸡4G16G 3000",
                "description" => '<p><img src="https://img.alicdn.com/imgextra/i1/2672032086/TB2sU5YX8HH8KJjy0FbXXcqlpXa_!!2672032086.jpg" /><img src="https://img.alicdn.com/imgextra/i4/2672032086/TB2HwNWumBjpuFjy1XdXXaooVXa_!!2672032086.jpg" /><img src="https://img.alicdn.com/imgextra/i4/2672032086/TB2Y6PJugJlpuFjSspjXXcT.pXa_!!2672032086.jpg" /><img src="https://img.alicdn.com/imgextra/i1/2672032086/TB22lOTcmBYBeNjy0FeXXbnmFXa_!!2672032086.jpg" /><img src="https://img.alicdn.com/imgextra/i3/2672032086/TB2F4KNul0kpuFjSsziXXa.oVXa_!!2672032086.jpg" /><img src="https://img.alicdn.com/imgextra/i4/2672032086/TB2O1qZoZbI8KJjy1zdXXbe1VXa_!!2672032086.jpg" /><img src="https://img.alicdn.com/imgextra/i4/2672032086/TB2mNK1yiRnpuFjSZFCXXX2DXXa_!!2672032086.jpg" /><img src="https://img.alicdn.com/imgextra/i4/2672032086/TB2rmzDyb4npuFjSZFmXXXl4FXa_!!2672032086.jpg" /><img src="https://img.alicdn.com/imgextra/i4/2672032086/TB2vNOVumxjpuFjSszeXXaeMVXa_!!2672032086.jpg" /></p>',
                "image"       => "https://img.alicdn.com/bao/uploaded/i2/TB1SynxMVXXXXaVXFXX_qyp.VXX_111729.jpg_b.jpg",
                "price"       => "359.00",
                "skus"        => [
                    ["title" => "DDR4 8G 2400", "description" => "DDR4 8G 2400", "price" => "519.00"],
                    ["title" => "DDR4 4G 2400", "description" => "DDR4 4G 2400", "price" => "359.00"],
                    ["title" => "DDR4 8G*2 2400", "description" => "DDR4 8G*2 2400", "price" => "1279.00"],
                    ["title" => "DDR4 16G 2400", "description" => "DDR4 16G 2400", "price" => "1279.00"],
                ],
                "properties"  => [
                    ["name" => "品牌名称", "value" => "海盗船"],
                    ["name" => "内存容量", "value" => "16GB"],
                    ["name" => "内存容量", "value" => "8GB"],
                    ["name" => "内存容量", "value" => "4GB"],
                    ["name" => "传输类型", "value" => "DDR4"],
                ],
            ],
            [
                "title"       => "Samsung/三星 8G DDR4 2400",
                "long_title"  => "三星内存条8g DDR4 2400 2133 2666 笔记本内存条16g四代吃鸡内存",
                "description" => '<p><img src="https://img.alicdn.com/imgextra/i4/2088879112/TB2haJVAXOWBuNjy0FiXXXFxVXa_!!2088879112.jpg" /><img src="https://img.alicdn.com/imgextra/i4/2088879112/TB24BfbAhWYBuNjy1zkXXXGGpXa_!!2088879112.jpg" /><img src="https://img.alicdn.com/imgextra/i2/2088879112/TB2D_McAntYBeNjy1XdXXXXyVXa_!!2088879112.jpg" /><img src="https://img.alicdn.com/imgextra/i3/2088879112/TB255XTAeOSBuNjy0FdXXbDnVXa_!!2088879112.jpg" /><img src="https://img.alicdn.com/imgextra/i1/2088879112/TB2.iU3rRmWBuNkSndVXXcsApXa_!!2088879112.jpg" /><img src="https://img.alicdn.com/imgextra/i1/2088879112/TB2p93srLiSBuNkSnhJXXbDcpXa_!!2088879112.jpg" /><img src="https://img.alicdn.com/imgextra/i1/2088879112/TB2z_ugAf5TBuNjSspmXXaDRVXa_!!2088879112.jpg" /><img src="https://img.alicdn.com/imgextra/i1/2088879112/TB2WBc7rOOYBuNjSsD4XXbSkFXa_!!2088879112.jpg" /></p><p><img src = "https://img.alicdn.com/imgextra/i2/2088879112/TB23DUcAntYBeNjy1XdXXXXyVXa_!!2088879112.jpg" /><img src = "https://img.alicdn.com/imgextra/i1/2088879112/TB28YJWAXuWBuNjSszbXXcS7FXa_!!2088879112.jpg" /><img src = "https://img.alicdn.com/imgextra/i2/2088879112/TB2p1NBAf5TBuNjSspcXXbnGFXa_!!2088879112.jpg" /></p > <p ><img src = "https://img.alicdn.com/imgextra/i3/2088879112/TB25P9BjkZmBKNjSZPiXXXFNVXa_!!2088879112.jpg" /><img src = "https://img.alicdn.com/imgextra/i2/2088879112/TB2ArOKAbSYBuNjSspfXXcZCpXa_!!2088879112.jpg" /></p > <p ><img src = "https://gdp.alicdn.com/imgextra/i4/2088879112/TB20U1Tcsr_F1JjSZFoXXbVRXXa_!!2088879112.jpg" /></p >',
                "image"       => "https://img.alicdn.com/bao/uploaded/i8/TB1nkDwATJYBeNjy1zelIqhzVXa_020604.jpg_b.jpg",
                "price"       => "539.00",
                "skus"        => [
                    ["title" => "DDR4 2400 8G", "description" => "DDR4 2400 8G", "price" => "539.00"],
                    ["title" => "DDR4 2133 8G", "description" => "DDR4 2133 8G", "price" => "539.00"],
                    ["title" => "DDR4 2666 8G", "description" => "DDR4 2666 8G", "price" => "589.00"],
                    ["title" => "DDR4 2400 16G", "description" => "DDR4 2400 16G", "price" => "1199.00"],
                ],
                "properties"  => [
                    ["name" => "品牌名称", "value" => "三星"],
                    ["name" => "传输类型", "value" => "DDR4"],
                    ["name" => "内存容量", "value" => "8GB"],
                    ["name" => "内存容量", "value" => "16GB"],
                ],
            ],
        ];

        // 查找名为『内存』的商品类目
        $category = Category::where('name', '内存')->first();

        // 遍历上面的商品数据
        foreach ($productData as $data) {
            // 创建一个新商品
            $product = new Product(array_merge(Arr::only($data, [
                'title',
                'long_title',
                'description',
                'image',
                'price',
            ]), [
                'on_sale' => true,
                'rating'  => 5,
            ]));
            $product->category()->associate($category);
            $product->save();

            // 遍历商品数据中的 SKU 字段
            foreach ($data['skus'] as $sku) {
                $product->skus()->create(array_merge($sku, ['stock' => 999]));
            }
            // 遍历商品数据中的 properties 字段
            foreach ($data['properties'] as $attribute) {
                $product->properties()->create($attribute);
            }
        }
    }
}
