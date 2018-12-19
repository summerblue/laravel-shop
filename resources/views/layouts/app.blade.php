<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Laravel Shop') - Laravel 电商教程</title>
  <!-- 样式 -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body id="app" class="{{ route_class() }}-page">
  @include('layouts._header')
  <main class="container">
    @yield('content')
  </main>
  @include('layouts._footer')
</body>
<!-- JS 脚本 -->
<script src="{{ mix('js/app.js') }}"></script>
</html>
