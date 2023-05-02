<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-topbar="light">

    <head>
        <meta charset="utf-8" />
        <title>@yield('title') | RSUD dr. Wahidin Sudiro Husodo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="SIMRS 2.0 RSUD dr. Wahidin Sudiro Husodo" name="description" />
        <meta content="Mahendra" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico')}}">
        @include('layouts.head-css')
  </head>

    @yield('body')

    @yield('content')

    @include('layouts.vendor-scripts')
    </body>
</html>
