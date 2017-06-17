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
                    <a href="/login">Войти</a>
                </li>
            </ul>
        </nav>
    </div>
</div>