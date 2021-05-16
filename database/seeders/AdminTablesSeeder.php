<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // base tables
        \Encore\Admin\Auth\Database\Menu::truncate();
        \Encore\Admin\Auth\Database\Menu::insert(
            [
                [
                    "icon" => "fa-bar-chart",
                    "order" => 1,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "首页",
                    "uri" => "/"
                ],
                [
                    "icon" => "fa-tasks",
                    "order" => 10,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "系统管理",
                    "uri" => NULL
                ],
                [
                    "icon" => "fa-users",
                    "order" => 11,
                    "parent_id" => 2,
                    "permission" => NULL,
                    "title" => "管理员",
                    "uri" => "auth/users"
                ],
                [
                    "icon" => "fa-user",
                    "order" => 12,
                    "parent_id" => 2,
                    "permission" => NULL,
                    "title" => "角色",
                    "uri" => "auth/roles"
                ],
                [
                    "icon" => "fa-ban",
                    "order" => 13,
                    "parent_id" => 2,
                    "permission" => NULL,
                    "title" => "权限",
                    "uri" => "auth/permissions"
                ],
                [
                    "icon" => "fa-bars",
                    "order" => 14,
                    "parent_id" => 2,
                    "permission" => NULL,
                    "title" => "菜单",
                    "uri" => "auth/menu"
                ],
                [
                    "icon" => "fa-history",
                    "order" => 15,
                    "parent_id" => 2,
                    "permission" => NULL,
                    "title" => "操作日志",
                    "uri" => "auth/logs"
                ],
                [
                    "icon" => "fa-user",
                    "order" => 2,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "用户管理",
                    "uri" => "/users"
                ],
                [
                    "icon" => "fa-cubes",
                    "order" => 4,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "商品管理",
                    "uri" => "/products"
                ],
                [
                    "icon" => "fa-rmb",
                    "order" => 8,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "订单管理",
                    "uri" => "/orders"
                ],
                [
                    "icon" => "fa-tags",
                    "order" => 9,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "优惠券管理",
                    "uri" => "/coupon_codes"
                ],
                [
                    "icon" => "fa-bars",
                    "order" => 3,
                    "parent_id" => 0,
                    "permission" => NULL,
                    "title" => "类目管理",
                    "uri" => "/categories"
                ],
                [
                    "icon" => "fa-flag-checkered",
                    "order" => 5,
                    "parent_id" => 9,
                    "permission" => NULL,
                    "title" => "众筹商品",
                    "uri" => "/crowdfunding_products"
                ],
                [
                    "icon" => "fa-cubes",
                    "order" => 6,
                    "parent_id" => 9,
                    "permission" => NULL,
                    "title" => "普通商品",
                    "uri" => "/products"
                ],
                [
                    "icon" => "fa-bolt",
                    "order" => 7,
                    "parent_id" => 9,
                    "permission" => NULL,
                    "title" => "秒杀商品",
                    "uri" => "/seckill_products"
                ]
            ]
        );

        \Encore\Admin\Auth\Database\Permission::truncate();
        \Encore\Admin\Auth\Database\Permission::insert(
            [
                [
                    "http_method" => "",
                    "http_path" => "*",
                    "name" => "All permission",
                    "slug" => "*"
                ],
                [
                    "http_method" => "GET",
                    "http_path" => "/",
                    "name" => "Dashboard",
                    "slug" => "dashboard"
                ],
                [
                    "http_method" => "",
                    "http_path" => "/auth/login\r\n/auth/logout",
                    "name" => "Login",
                    "slug" => "auth.login"
                ],
                [
                    "http_method" => "GET,PUT",
                    "http_path" => "/auth/setting",
                    "name" => "User setting",
                    "slug" => "auth.setting"
                ],
                [
                    "http_method" => "",
                    "http_path" => "/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs",
                    "name" => "Auth management",
                    "slug" => "auth.management"
                ],
                [
                    "http_method" => "",
                    "http_path" => "/users*",
                    "name" => "用户管理",
                    "slug" => "users"
                ],
                [
                    "http_method" => "",
                    "http_path" => "/products*",
                    "name" => "商品管理",
                    "slug" => "products"
                ],
                [
                    "http_method" => "",
                    "http_path" => "/coupon_codes*",
                    "name" => "优惠券管理",
                    "slug" => "coupon_codes"
                ],
                [
                    "http_method" => "",
                    "http_path" => "/orders*",
                    "name" => "订单管理",
                    "slug" => "orders"
                ]
            ]
        );

        \Encore\Admin\Auth\Database\Role::truncate();
        \Encore\Admin\Auth\Database\Role::insert(
            [
                [
                    "name" => "Administrator",
                    "slug" => "administrator"
                ],
                [
                    "name" => "运营",
                    "slug" => "operation"
                ]
            ]
        );

        // pivot tables
        DB::table('admin_role_menu')->truncate();
        DB::table('admin_role_menu')->insert(
            [
                [
                    "menu_id" => 2,
                    "role_id" => 1
                ]
            ]
        );

        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_role_permissions')->insert(
            [
                [
                    "permission_id" => 1,
                    "role_id" => 1
                ],
                [
                    "permission_id" => 2,
                    "role_id" => 2
                ],
                [
                    "permission_id" => 3,
                    "role_id" => 2
                ],
                [
                    "permission_id" => 4,
                    "role_id" => 2
                ],
                [
                    "permission_id" => 6,
                    "role_id" => 2
                ],
                [
                    "permission_id" => 7,
                    "role_id" => 2
                ],
                [
                    "permission_id" => 8,
                    "role_id" => 2
                ],
                [
                    "permission_id" => 9,
                    "role_id" => 2
                ]
            ]
        );

        // finish
    }
}
