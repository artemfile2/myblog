<h2 class="p2">Новости</h2>
    @if (count($news) > 0)
        @foreach($news as $event)
            <div class="wrap line">
                <!--<img src="assets/images/page1-img4.png" alt="" class="img-indent img-radius">-->
                <p class="title">
                    {{ $event->title }}
                </p>

                <p class="extra-wrap">
                    {{ $event->text }}
                </p>

                <a href="{{ $event->id }}" class="button-1 top-3">Читать</a>
            </div>
        @endforeach
    @else
        <div class="wrap line">
            <p class="data-link">
                Новостей нет и не будет, но вы держитесь!!!
            </p>
        </div>
    @endif