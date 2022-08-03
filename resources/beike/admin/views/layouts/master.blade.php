<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <base href="{{ $admin_base_url }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="asset" content="{{ asset('/') }}">
    <meta name="editor_language" content="{{ locale() }}">
    <script src="{{ asset('vendor/vue/2.6.12/vue.js') }}"></script>
    <script src="{{ asset('vendor/element-ui/2.6.2/js.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('vendor/layer/3.5.1/layer.js') }}"></script>
    {{--  <script src="{{ asset('vendor/jquery/3.6.0/jquery.min.js') }}"></script>
      <script src="{{ asset('vendor/axios/0.21.1/axios.min.js') }}"></script>
      <script src="{{ mix('build/js/app.js') }}"></script> --}}
    {{-- <script src="https://cdn.bootcdn.net/ajax/libs/element-ui/2.15.8/index.min.js"></script> --}}
    <script src="{{ asset('vendor/bootstrap/5.1.3/js/bootstrap.bundle.min.js') }}"></script>
    <link href="{{ mix('/build/beike/admin/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/element-ui/2.6.2/css.css') }}">
    <link href="{{ mix('build/beike/admin/css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('build/beike/admin/js/app.js') }}"></script>
    <title>beike admin</title>
    @stack('header')
    {{-- <x-analytics /> --}}
</head>
<body class="@yield('body-class')">
<!-- <div style="height: 80px; background: white;"></div> -->

<x-admin-header/>

<div class="main-content">
  <aside class="sidebar navbar-expand-xs border-radius-xl">
    <x-admin-sidebar/>
  </aside>
  <div id="content">
    <div class="page-title-box"><h4 class="page-title">@yield('title')</h4></div>
    <div class="container-fluid p-0 mt-4">
        @yield('content')
    </div>
  </div>
</div>
@stack('footer')
</body>
</html>
