<div class="wrap">
    <div class="wrap-login">
        <form class="login in" method="post" action="{{ route('site.db.addPost') }}">
            {{ csrf_field() }}
            <h2 class="h1-login">Добавить статью</h2>
            <fieldset class="inputs">
                <label for="inputTitle" class="">Заголовок</label>
                <input class="username" name="title" id="inputTitle" placeholder="Заголовок статьи" autofocus required type="text">
                <label for="inputText" class="">Текст</label>
                <textarea class="username" rows="10" cols="45" name="text" placeholder="Текст статьи" required id="inputText"></textarea>
            </fieldset>
            <fieldset class="actions">
                <button class="submit in" type="submit">Сохранить</button>
                    <a href="{{ route('site.db.add') }}">Отмена</a>
            </fieldset>
        </form>
    </div>

</div>