<div class="wrap">

    <div class="wrap-login">
        <form class="login reg" method="POST" action="{{ route('site.auth.registerPost') }}">
            {{ csrf_field() }}

            <h2 class="h1-login">Регистрация</h2>
            <fieldset class="inputs">

                        @if ($errors->has('user'))
                            <label for="inputUser" class="labelRed">{{ $errors->first('user') }}</label>
                        @else
                            <label for="inputUser" class="">Имя</label>
                        @endif
                        <input class="username" name="user" id="inputUser" placeholder="Логин" autofocus required type="text" value="{{ old('user') }}">

                        @if ($errors->has('email'))
                            <label for="inputMail" class="labelRed">{{  $errors->first('email') }}</label>
                        @else
                            <label for="inputMail" class="">E-Mail</label>
                        @endif
                        <input class="email" name="email" id="inputMail" placeholder="user@domain.ru" type="email" required value="{{ old('email') }}">

                        @if ($errors->has('pass'))
                            <label for="inputPass" class="labelRed">{{  $errors->first('pass') }}</label>
                        @else
                            <label for="inputPass" class="">Пароль</label>
                        @endif
                        <input class="password" name="pass" id="inputPass" placeholder="Пароль" required type="password">

                        @if ($errors->has('pass2'))
                            <label for="inputPass2" class="labelRed">{{  $errors->first('pass2') }}</label>
                        @else
                            <label for="inputPass2" class="">Подтверждение пароля</label>
                        @endif
                        <input class="password" name="pass2" id="inputPass2" placeholder="Подтверждение пароля" required type="password">

            </fieldset>
            <fieldset class="actions">
                <input class="submit reg" value="Зарегистрироваться" type="submit">
                    <a href="{{ route('site.auth.register') }}">Очистить</a>
            </fieldset>
        </form>
    </div>

</div>