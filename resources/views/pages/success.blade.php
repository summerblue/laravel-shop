@extends('layouts.app')
@section('title', '操作成功')

@section('content')
  <div class="card">
    <div class="card-header">操作成功</div>
    <div class="card-body text-center">
      <h1>{{ $msg }}</h1>
      <a class="btn btn-primary" href="{{ route('root') }}">返回首页</a>
    </div>
  </div>
@endsection
