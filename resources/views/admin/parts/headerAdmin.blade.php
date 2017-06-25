<header>
    <div class="main">
        <div class="wrap">
            <h1>
                <a href="/"><img src="assets/images/logo.png" alt=""></a>
            </h1>
            ‪
            <div class="slogan">

                My blog test Laravel!
                <br>
                ADMIN PANEL
                @if (Auth::check())
                    <b class="authName"> {{ Auth::user()->name }}</b>
                @else
                    <b>Гость</b>
                @endif

            </div>

        </div>

        @if (Auth::check())
            @include('admin.parts.menuAdmin')
        @endif

    </div>

        @yield('headContent')

</header>