<?php
namespace App\Http\Requests;

use App\Exceptions\InvalidRequestException;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductSku;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\Rule;

class SeckillOrderRequest extends Request
{
    public function rules()
    {
        return [
            'address.province'      => 'required',
            'address.city'          => 'required',
            'address.district'      => 'required',
            'address.address'       => 'required',
            'address.zip'           => 'required',
            'address.contact_name'  => 'required',
            'address.contact_phone' => 'required',
            'sku_id'     => [
                'required',
                function ($attribute, $value, $fail) {
                    // 从 Redis 中读取数据
                    $stock = \Redis::get('seckill_sku_'.$value);
                    // 如果是 null 代表这个 SKU 不是秒杀商品
                    if (is_null($stock)) {
                        return $fail('该商品不存在');
                    }
                    // 判断库存
                    if ($stock < 1) {
                        return $fail('该商品已售完');
                    }

                    if (!$user = \Auth::user()) {
                        throw new AuthenticationException('请先登录');
                    }
                    if (!$user->email_verified) {
                        throw new InvalidRequestException('请先验证邮箱');
                    }

                    if ($order = Order::query()
                        // 筛选出当前用户的订单
                        ->where('user_id', $this->user()->id)
                        ->whereHas('items', function ($query) use ($value) {
                            // 筛选出包含当前 SKU 的订单
                            $query->where('product_sku_id', $value);
                        })
                        ->where(function ($query) {
                            // 已支付的订单
                            $query->whereNotNull('paid_at')
                                // 或者未关闭的订单
                                ->orWhere('closed', false);
                        })
                        ->first()) {
                        if ($order->paid_at) {
                            return $fail('你已经抢购了该商品');
                        }

                        return $fail('你已经下单了该商品，请到订单页面支付');
                    }
                },
            ],
        ];
    }
}
