@extends('layouts.app')
@section('title', '收货地址列表')

@section('content')
<div class="row">
<div class="col-lg-10 col-lg-offset-1">
<div class="panel panel-default">
  <div class="panel-heading">收货地址列表</div>
  <div class="panel-body">
    <table class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>收货人</th>
        <th>地址</th>
        <th>邮编</th>
        <th>电话</th>
        <th>操作</th>
      </tr>
      </thead>
      <tbody>
      @foreach($addresses as $address)
      <tr>
        <td>{{ $address->contact_name }}</td>
        <td>{{ $address->full_address }}</td>
        <td>{{ $address->zip }}</td>
        <td>{{ $address->contact_phone }}</td>
        <td>
          <button class="btn btn-primary">修改</button>
          <button class="btn btn-danger">删除</button>
        </td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
@endsection
