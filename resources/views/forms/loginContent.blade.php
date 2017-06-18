<div class="wrap">
    <div class="wrap-login">
        <form class="login in" method="post" action="{{ route('site.auth.loginPost') }}">
            {{ csrf_field() }}
            <h2 class="h1-login">Авторизация</h2>
            <fieldset class="inputs">
                <label for="inputUser" class="">Имя/Почта</label>
                <input class="username" name="email" id="inputUser" placeholder="Логин" autofocus required type="text">
                <label for="inputPass" class="">Пароль</label>
                <input class="password" name="pass" id="inputPass" placeholder="Пароль" required type="password">
            </fieldset>
            <fieldset class="actions">
                <button class="submit in" type="submit">Войти</button>
                    <a href="/register">Зарегистрироваться</a>
            </fieldset>
        </form>
    </div>

</div>