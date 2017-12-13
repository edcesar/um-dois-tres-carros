@component('admin.layouts.elements.body')
    @slot('title') Posts @endslot
    @slot('description') Administração de matérias @endslot

    <a href="{{ route('posts.create') }}" class="btn btn-default">novo</a>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>Titulo da matéria</th>
            <th class="text-right">ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td class="text-right">
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-xs">
                    <span class="glyphicon glyphicon-plus"></span>
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

    {!! $posts->links() !!}

@endcomponent