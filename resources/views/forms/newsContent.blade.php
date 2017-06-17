<h2 class="p3">Новости</h2>

<div class="wrap">
    <img src="assets/images/page1-img4.png" alt="" class="img-indent img-radius">
    <p class="extra-wrap">Group is one of created by TemplateMonster.com. This website template is optimized for 1280X1024 screen resolution. This goes with 2 packages – with PSD source files and without them. PSD source files are available for free for the registered members of TemplateMonster.com.</p>

    <a href="#" class="button-1 top-3">Читать</a>
</div>

<div class="wrap">
    <img src="assets/images/page1-img3.jpg" alt="" class="img-indent img-radius">
    <p class="extra-wrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi atque autem consectetur dolor excepturi explicabo facere illum in iste minima nam nisi optio rerum, saepe velit vero vitae voluptas!</p>

    <a href="#" class="button-1 top-3">Читать</a>
</div>

{!! dump($key) !!}

<ul>
@foreach($key as $value)
    <li>
        {{$value}}
    </li>
@endforeach
</ul>