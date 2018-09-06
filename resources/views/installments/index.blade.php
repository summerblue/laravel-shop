@extends('layouts.app')
@section('title', '分期付款列表')

@section('content')
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading text-center"><h2>分期付款列表</h2></div>
        <div class="panel-body">
          <table class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>编号</th>
              <th>金额</th>
              <th>期数</th>
              <th>费率</th>
              <th>状态</th>
              <th>操作</th>
            </tr>
            </thead>
            <tbody>
            @foreach($installments as $installment)
              <tr>
                <td>{{ $installment->no }}</td>
                <td>￥{{ $installment->total_amount }}</td>
                <td>{{ $installment->count }}</td>
                <td>{{ $installment->fee_rate }}%</td>
                <td>{{ \App\Models\Installment::$statusMap[$installment->status] }}</td>
                <td><a class="btn btn-primary btn-xs" href="{{ route('installments.show', ['installment' => $installment->id]) }}">查看</a></td>
              </tr>
            @endforeach
            </tbody>
          </table>
          <div class="pull-right">{{ $installments->render() }}</div>
        </div>
      </div>
    </div>
  </div>
@endsection
