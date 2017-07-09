<h2 class="p2">Статья</h2>

    <div class="wrap line">
            <p class="data-link">
                Дата: {{ formatDate(2, $article->created_at) }}
            </p>
            <p class="extra-wrap">
                Автор: {{ $article->name }}
            </p>
            <p class="title">
                Тема: {{ $article->title }}
            </p>
            <p class="extra-wrap">
                {{ $article->text }}
            </p>

            @if ( Auth::check() )
                <a href="#" class="button-2 top-3">Редактировать</a>
                <a href="{{ route('site.db.delete') .'/'. $article->id }}" class="button-2 top-3">Удалить</a>
            @endif
            <br><br>
            <h3>Коментарии</h3>

                @foreach($comments as $comm)
                <div class="extra-wrap-commit">
                    <p>Дата коментария: {{ formatDate(4, $comm->created_at) }}</p>
                    <br>
                    <p>Пользователь {{ $comm->name }}</p>
                    <br>
                    <p>{{ $comm->comment }}</p>
                    <br>
                    @if ( Auth::check() )
                        <a href="#" class="button-2 top-3">Ответить</a>
                    @endif
                </div>
                @endforeach

            <br><br>

            <div class="wrap line">
                <form class="login in" method="post" action="{{ route('site.db.addPost') }}">
                    {{ csrf_field() }}
                    <h3>Добавить коментарий</h3>
                    <fieldset class="inputs">
                        <label for="inputText" class="">Текст</label>
                        <textarea class="username" rows="10" cols="45" name="text" placeholder="Текст коментария" required id="inputText"></textarea>
                    </fieldset>
                    <fieldset class="actions">
                        <button class="submit in" type="submit">Отправить</button>
                    </fieldset>
                </form>
            </div>
            <br><br>
            <a href="{{ route('site.main.articles') }}" class="button-1 top-3">Назад</a>
        </div>