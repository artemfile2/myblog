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
                Hello

                @if (Auth::check())
                    {{ Auth::user()->user }}
                @else
                    Гость
                @endif

            </div>

            @include('parts.social')
        </div>

        @include('parts.navigationmenu')

    </div>

        @yield('headContent')

</header>