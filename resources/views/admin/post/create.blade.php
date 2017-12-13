@component('admin.layouts.elements.body')
    @slot('title') Páginas @endslot
    @slot('description') Inclusão de página  @endslot

    <form action="{{ route('posts.store') }}" class="form-horizontal" method="post">
        @include('admin.post.form')
    </form>

    <a href="{{ route('posts.index') }}" class="btn btn-xs btn-default">voltar</a>
@endcomponent