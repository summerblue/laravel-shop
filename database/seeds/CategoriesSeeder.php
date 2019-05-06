<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name'     => '手机配件',
                'children' => [
                    ['name' => '手机壳'],
                    ['name' => '贴膜'],
                    ['name' => '存储卡'],
                    ['name' => '数据线'],
                    ['name' => '充电器'],
                    [
                        'name'     => '耳机',
                        'children' => [
                            ['name' => '有线耳机'],
                            ['name' => '蓝牙耳机'],
                        ],
                    ],
                ],
            ],
            [
                'name'     => '电脑配件',
                'children' => [
                    ['name' => '显示器'],
                    ['name' => '显卡'],
                    ['name' => '内存'],
                    ['name' => 'CPU'],
                    ['name' => '主板'],
                    ['name' => '硬盘'],
                ],
            ],
            [
                'name'     => '电脑整机',
                'children' => [
                    ['name' => '笔记本'],
                    ['name' => '台式机'],
                    ['name' => '平板电脑'],
                    ['name' => '一体机'],
                    ['name' => '服务器'],
                    ['name' => '工作站'],
                ],
            ],
            [
                'name'     => '手机通讯',
                'children' => [
                    ['name' => '智能机'],
                    ['name' => '老人机'],
                    ['name' => '对讲机'],
                ],
            ],
        ];

        foreach ($categories as $data) {
            $this->createCategory($data);
        }
    }

    protected function createCategory($data, $parent = null)
    {
        // 创建一个新的类目对象
        $category = new Category(['name' => $data['name']]);
        // 如果有 children 字段则代表这是一个父类目
        $category->is_directory = isset($data['children']);
        // 如果有传入 $parent 参数，代表有父类目
        if (!is_null($parent)) {
            $category->parent()->associate($parent);
        }
        //  保存到数据库
        $category->save();
        // 如果有 children 字段并且 children 字段是一个数组
        if (isset($data['children']) && is_array($data['children'])) {
            // 遍历 children 字段
            foreach ($data['children'] as $child) {
                // 递归调用 createCategory 方法，第二个参数即为刚刚创建的类目
                $this->createCategory($child, $category);
            }
        }
    }
}
