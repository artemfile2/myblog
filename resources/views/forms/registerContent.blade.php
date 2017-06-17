<div class="wrap">

    <div class="wrap-login">
        <form class="login reg" methos="POST" action="{{ route('site.auth.loginPost') }}">
            {{ csrf_field() }}
            <h2 class="h1-login">Регистрация</h2>
            <fieldset class="inputs">
                <input class="username" placeholder="Логин" autofocus="" required="" type="text">
                <input class="email" placeholder="user@domain.ru" autofocus="" required="" type="email">
                <input class="password" placeholder="Пароль" required="" type="password">
            </fieldset>
            <fieldset class="actions">
                <input class="submit reg" value="Зарегистрироваться" type="submit">
                    <a href="">Очистить</a>
            </fieldset>
        </form>
    </div>

</div>