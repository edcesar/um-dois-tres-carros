@component('admin.layouts.elements.body')
    @slot('title') Post @endslot
    @slot('description') Exibindo matéria @endslot

    <h4>{{ $post->title }}</h4>

    <p>
        <small>
            Criado em {{ $post->created_at->format('d/m/Y H:i:s') }} | Atualizado em {{ $post->updated_at->format('d/m/Y H:i:s') }}
        </small>
    </p>

    {!! $post->body !!}
    <br><br>
    <a href="{{ route('posts.index') }}" class="btn btn-xs btn-default">voltar</a>
    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-xs btn-primary">editar</a>
    <form action="{{ route('posts.destroy', $post->id) }}" class="form-horizontal" method="post" style="display: inline-block">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="remover" class="btn btn-xs btn-danger">
    </form>
@endcomponent