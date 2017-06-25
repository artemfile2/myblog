<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title> {{ $title or ''}} </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="{{ route('site.main.index') }}">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/styleLogin.css">
    @yield('head_styles')

</head>
<body>

    @yield('header')

    @yield('content')

    @yield('footer-copyrights')

</body>
</html>