<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PREMIER LEAGUE | @yield('title')</title>
    @include('includes.app.style')
    @stack('custom-style')
</head>
<body>
    <!-- Top Menu Items -->
    @include('includes.app.header')
    <!-- /Top Menu Items -->

    @yield('content')

    @include('includes.app.script')
    @stack('custom-script')
</body>
</html>
