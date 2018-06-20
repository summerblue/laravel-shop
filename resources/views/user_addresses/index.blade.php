@extends('layouts.app')
@section('title', '收货地址列表')

@section('content')
<div class="row">
<div class="col-lg-10 col-lg-offset-1">
<div class="panel panel-default">
  <div class="panel-heading">
    收货地址列表
    <a href="{{ route('user_addresses.create') }}" class="pull-right">新增收货地址</a>
  </div>
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
          <a href="{{ route('user_addresses.edit', ['user_address' => $address->id]) }}" class="btn btn-primary">修改</a>
          <button class="btn btn-danger btn-del-address" type="button" data-id="{{ $address->id }}">删除</button>
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

@section('scriptsAfterJs')
<script>
$(document).ready(function() {
  // 删除按钮点击事件
  $('.btn-del-address').click(function() {
    // 获取按钮上 data-id 属性的值，也就是地址 ID
    var id = $(this).data('id');
    // 调用 sweetalert
    swal({
        title: "确认要删除该地址？",
        icon: "warning",
        buttons: ['取消', '确定'],
        dangerMode: true,
      })
    .then(function(willDelete) { // 用户点击按钮后会触发这个回调函数
      // 用户点击确定 willDelete 值为 true， 否则为 false
      // 用户点了取消，啥也不做
      if (!willDelete) {
        return;
      }
      // 调用删除接口，用 id 来拼接出请求的 url
      axios.delete('/user_addresses/' + id)
        .then(function () {
          // 请求成功之后重新加载页面
          location.reload();
        })
    });
  });
});
</script>
@endsection
