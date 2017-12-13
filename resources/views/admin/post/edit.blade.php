@component('admin.layouts.elements.body')
    @slot('title') Post @endslot
    @slot('description') Edição de conteúdo @endslot

    <form action="{{ route('posts.update', $post->id) }}" class="form-horizontal" method="post">
        <input type="hidden" name="_method" value="PUT">
        @include('admin.post.form')
    </form>

    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-xs btn-default">voltar</a>
@endcomponent