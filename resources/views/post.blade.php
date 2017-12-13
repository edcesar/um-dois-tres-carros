@component('admin.layouts.elements.body')
    @slot('title') Materia @endslot
    @slot('description') Exibindo conteudo @endslot

    <h4>{{ $post->title }}</h4>

    <p>
        <small>
            Criado em {{ $post->created_at->format('d/m/Y H:i:s') }} | Atualizado em {{ $post->updated_at->format('d/m/Y H:i:s') }}
        </small>
    </p>

   {!! $post->body !!} 
@endcomponent