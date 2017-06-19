<div class="nav-shadow">
    <div>
        <nav>
            <ul class="menu">
                <li class="{{Request::path()=='/' ? 'active' : ''}}">
                    <a href="/">Главная</a>
                </li>
                <li class="{{Request::path()=='news' ? 'active' : ''}}">
                    <a href="/news">Новости</a>
                </li>
                <li class="{{Request::path()=='articles' ? 'active' : ''}}">
                    <a href="/articles">Статьи</a>
                </li>
                <li class="{{Request::path()=='contacts' ? 'active' : ''}}">
                    <a href="/about">Контакты</a>
                </li>
                <li class="{{Request::path()=='login' ? 'active' : ''}}">
                    @if (Auth::check())
                        <a href="{{ route('site.auth.logout') }}"> Выход </a>
                    @else
                        <a href="/login">Войти</a>
                    @endif
                </li>
            </ul>
        </nav>
    </div>
</div>