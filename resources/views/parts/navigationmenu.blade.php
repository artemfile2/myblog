<div class="nav-shadow">
    <div>
        <nav>
            <ul class="menu">
                <li class="{{Request::path()=='/' ? 'active' : ''}}">
                    <a href="{{ route('site.main.index') }}">Главная</a>
                </li>
                <li class="{{Request::path()=='news' ? 'active' : ''}}">
                    <a href="{{ route('site.main.news') }}">Новости</a>
                </li>
                <li class="{{Request::path()=='articles' ? 'active' : ''}}">
                    <a href="{{ route('site.main.articles') }}">Статьи</a>
                </li>
                <li class="{{Request::path()=='about' ? 'active' : ''}}">
                    <a href="{{ route('site.main.about') }}">Контакты</a>
                </li>
                <li class="{{Request::path()=='login' ? 'active' : ''}}">
                    @if (Auth::check())
                        <a href="{{ route('site.auth.logout') }}"> Выход </a>
                    @else
                        <a href="{{ route('site.auth.login') }}">Войти</a>
                    @endif
                </li>
            </ul>
        </nav>
    </div>
</div>