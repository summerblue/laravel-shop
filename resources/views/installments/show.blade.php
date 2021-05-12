@extends('layouts.app')
@section('title', '查看分期付款')

@section('content')
  <div class="row">
    <div class="col-10 offset-1">
      <div class="card">
        <div class="card-header">
          <h5 class="mb-0 text-center">分期付款详情</h5>
        </div>
        <div class="card-body">
          <div class="installment-top">
            <div class="installment-info">
              <div class="line">
                <div class="line-label">商品订单：</div>
                <div class="line-value">
                  <a target="_blank" href="{{ route('orders.show', ['order' => $installment->order_id]) }}">查看</a>
                </div>
              </div>
              <div class="line">
                <div class="line-label">分期金额：</div>
                <div class="line-value">￥{{ $installment->total_amount }}</div>
              </div>
              <div class="line">
                <div class="line-label">分期期限：</div>
                <div class="line-value">{{ $installment->count }}期</div>
              </div>
              <div class="line">
                <div class="line-label">分期费率：</div>
                <div class="line-value">{{ $installment->fee_rate }}%</div>
              </div>
              <div class="line">
                <div class="line-label">逾期费率：</div>
                <div class="line-value">{{ $installment->fine_rate }}%</div>
              </div>
              <div class="line">
                <div class="line-label">当前状态：</div>
                <div class="line-value">{{ \App\Models\Installment::$statusMap[$installment->status] }}</div>
              </div>
            </div>
            <div class="installment-next text-right">
              <!-- 如果已经没有未还款的还款计划，说明已经结清 -->
              @if(is_null($nextItem))
                <div class="installment-clear text-center">此订单已结清</div>
              @else
                <div>
                  <span>近期待还：</span>
                  <div class="value total-amount">￥{{ $nextItem->total }}</div>
                </div>
                <div>
                  <span>截止日期：</span>
                  <div class="value">{{ $nextItem->due_date->format('Y-m-d') }}</div>
                </div>
                <div class="payment-buttons">
                  <a class="btn btn-primary btn-sm" href="">支付宝支付</a>
                  <button class="btn btn-sm btn-success" id='btn-wechat'>微信支付</button>
                </div>
              @endif
            </div>
          </div>
          <table class="table">
            <thead>
            <tr>
              <th>期数</th>
              <th>还款截止日期</th>
              <th>状态</th>
              <th>本金</th>
              <th>手续费</th>
              <th>逾期费</th>
              <th class="text-right">小计</th>
            </tr>
            </thead>
            @foreach($items as $item)
              <tr>
                <td>
                  {{ $item->sequence + 1 }}/{{ $installment->count }}期
                </td>
                <td>{{ $item->due_date->format('Y-m-d') }}</td>
                <td>
                  <!-- 如果是未还款 -->
                @if(is_null($item->paid_at))
                  <!-- 这里使用了我们之前在模型里定义的访问器 -->
                    @if($item->is_overdue)
                      <span class="overdue">已逾期</span>
                    @else
                      <span class="needs-repay">待还款</span>
                    @endif
                  @else
                    <span class="repaid">已还款</span>
                  @endif
                </td>
                <td>￥{{ $item->base }}</td>
                <td>￥{{ $item->fee }}</td>
                <td>{{ is_null($item->fine) ? '无' : ('￥'.$item->fine) }}</td>
                <td class="text-right">￥{{ $item->total }}</td>
              </tr>
            @endforeach
            <tr><td colspan="7"></td></tr>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
