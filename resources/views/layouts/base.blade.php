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


<!--==============================footer=================================-->
<footer>
    <p>
        © 2017
        <a href="/" class="link">ArtemBlog test!!!</a>
        by
        <a class="link" href="/" title="шаблоны сайта" rel="nofollow">шаблон сайта</a>
    </p>
    <p>
        Телефон: +1 234 567 890 &nbsp; Email: <a href="#" class="link">info@myblog.ru</a>
    </p>
</footer>

</body>
</html>