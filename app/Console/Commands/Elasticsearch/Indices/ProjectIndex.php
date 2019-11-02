<?php
namespace App\Console\Commands\Elasticsearch\Indices;

use Illuminate\Support\Facades\Artisan;

class ProjectIndex
{
    public static function getAliasName()
    {
        return 'products';
    }

    public static function getProperties()
    {
        return [
            'type'          => ['type' => 'keyword'],
            'title'         => ['type' => 'text', 'analyzer' => 'ik_smart', 'search_analyzer' => 'ik_smart_synonym'],
            'long_title'    => ['type' => 'text', 'analyzer' => 'ik_smart', 'search_analyzer' => 'ik_smart_synonym'],
            'category_id'   => ['type' => 'integer'],
            'category'      => ['type' => 'keyword'],
            'category_path' => ['type' => 'keyword'],
            'description'   => ['type' => 'text', 'analyzer' => 'ik_smart'],
            'price'         => ['type' => 'scaled_float', 'scaling_factor' => 100],
            'on_sale'       => ['type' => 'boolean'],
            'rating'        => ['type' => 'float'],
            'sold_count'    => ['type' => 'integer'],
            'review_count'  => ['type' => 'integer'],
            'skus'          => [
                'type'       => 'nested',
                'properties' => [
                    'title'       => [
                        'type'            => 'text',
                        'analyzer'        => 'ik_smart',
                        'search_analyzer' => 'ik_smart_synonym',
                        'copy_to'         => 'skus_title',
                    ],
                    'description' => [
                        'type'     => 'text',
                        'analyzer' => 'ik_smart',
                        'copy_to'  => 'skus_description',
                    ],
                    'price'       => ['type' => 'scaled_float', 'scaling_factor' => 100],
                ],
            ],
            'properties'    => [
                'type'       => 'nested',
                'properties' => [
                    'name'         => ['type' => 'keyword'],
                    'value'        => ['type' => 'keyword', 'copy_to' => 'properties_value'],
                    'search_value' => ['type' => 'keyword'],
                ],
            ],
        ];
    }

    public static function getSettings()
    {
        return [
            'analysis' => [
                'analyzer' => [
                    'ik_smart_synonym' => [
                        'type'      => 'custom',
                        'tokenizer' => 'ik_smart',
                        'filter'    => ['synonym_filter'],
                    ],
                ],
                'filter'   => [
                    'synonym_filter' => [
                        'type'          => 'synonym',
                        'synonyms_path' => 'analysis/synonyms.txt',
                    ],
                ],
            ],
        ];
    }

    public static function rebuild($indexName)
    {
        // 通过 Artisan 类的 call 方法可以直接调用命令
        // call 方法的第二个参数可以用数组的方式给命令传递参数
        Artisan::call('es:sync-products', ['--index' => $indexName]);
    }
}
