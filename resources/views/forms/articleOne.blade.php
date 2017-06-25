<h2 class="p2">Статья</h2>

        <div class="wrap line">
            <p class="data-link">
                Дата {{ $article->created_at }}
            </p>
            <p class="title">
                {{ $article->title }}
            </p>
            <p class="extra-wrap">
                {{ $article->text }}
            </p>

            @if ( Auth::check() )
                <a href="#" class="button-2 top-3">Редактировать</a>
                <a href="{{ route('site.db.delete') .'/'. $article->id }}" class="button-2 top-3">Удалить</a>
            @endif
            <br><br>
            <a href="{{ route('site.main.articles') }}" class="button-1 top-3">Назад</a>
        </div>