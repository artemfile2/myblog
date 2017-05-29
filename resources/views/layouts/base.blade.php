<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <title>Blog</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="{{ route('site.index') }}">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    @yield('head_styles')
</head>
<body>

    @yield('header')

    @yield('content')

    @yield('footer-copyrights')

</body>
</html>