<div class="wrap">

    <div class="wrap-login">
        <form class="login reg" method="POST" action="{{ route('site.auth.registerPost') }}">
            {{ csrf_field() }}
            @if (count($errors) > 0)
                <div>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h2 class="h1-login">Регистрация</h2>
            <fieldset class="inputs">
                <label for="inputUser" class="">Имя</label><!--required-->
                <input class="username" name="user" id="inputUser" placeholder="Логин" autofocus type="text">
                <label for="inputMail" class="">E-Mail</label>
                <input class="email" name="email" id="inputMail" placeholder="user@domain.ru" type="email">
                <label for="inputPass" class="">Пароль</label>
                <input class="password" name="pass" id="inputPass" placeholder="Пароль"  type="password">
                <label for="inputPass2" class="">Подтверждение пароля</label>
                <input class="password" name="pass2" id="inputPass2" placeholder="Подтверждение пароля" type="password">
            </fieldset>
            <fieldset class="actions">
                <input class="submit reg" value="Зарегистрироваться" type="submit">
                    <a href="">Очистить</a>
            </fieldset>
        </form>
    </div>

</div>