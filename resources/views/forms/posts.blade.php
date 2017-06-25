<h2 class="p2">Статьи</h2>
@if (count($articles) > 0)
    @foreach($articles as $article)
        <div class="wrap line">
            <a href="articles/article/{{ $article->id }}" class="top-3">
                <p class="title-Post">
                    {{ $article->title }}
                </p>
                <p class="text-Post">
                    {{ $article->text }}
                </p>
            </a>
        </div>
    @endforeach
@else
    <div class="wrap line">
        <p class="data-link">
            Статей нет и не будет, но вы держитесь!!!
        </p>
    </div>
@endif

<a href="{{ route('site.main.articles') }}" class="button-1 top-1">Читать всё</a>