<div class="wrap">
  {{ csrf_field() }}
    <div class="wrap-login">
        <form class="login in">
            <h2 class="h1-login">Войти</h2>
            <fieldset class="inputs">
                <input class="username" placeholder="Логин" autofocus="" required="" type="text">
                <input class="password" placeholder="Пароль" required="" type="password">
            </fieldset>
            <fieldset class="actions">
                <input class="submit in" value="Войти" type="submit">
                    <a href="/register">Зарегистрироваться</a>
            </fieldset>
        </form>
    </div>

</div>