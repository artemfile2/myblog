<h2 class="p2">Статьи</h2>
    @if ( Auth::check() )
        <br>
        <a href="{{ route('site.db.add') }}" class="button-2 top-3">Добавить</a>
        <br><br>
    @endif

    @if (count($articles) > 0)
        @foreach($articles as $article)
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

                <a href="articles/article/{{ $article->id }}" class="button-1 top-3">Читать</a>
            </div>
        @endforeach
    @else
        <div class="wrap line">
            <p class="data-link">
                Статей нет и не будет, но вы держитесь!!!
            </p>
        </div>
    @endif