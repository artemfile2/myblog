<div class="wrap">

    <table>
        <tr>
            <th>№</th>
            <th>Статья</th>
            <th>Автор</th>
            <th>Дата создания</th>
            <th>Дата редактирования</th>
            <th>Дата удаления</th>
            <th>Действие</th>
        </tr>

        @if (count($articles) > 0)
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>
                        {{ $article->name }}
                    </td>
                    <td>{{ formatDate(4, $article->created_at) }}</td>
                    <td>{{ formatDate(4, $article->updated_at) }}</td>
                    <td>{{ formatDate(4, $article->deleted_at) }}</td>
                    <td>
                        <a href="#" class="top-3">Редактировать</a>
                        <br>
                        <a href="#" class="top-3">Удалить</a>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>

</div>