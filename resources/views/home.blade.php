@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
   <h1>123 Carros, Blog</h1>
</div>
<div class="container">
    
        @foreach($posts as $post)
        <div class="row">
            <div class="panel panel-default col-md-10">
                <header>
                    <h2><a href="{{ route('post', $post->id) }}" >{{ $post->title }}</a></h2>
                    {{ $post->created_at->format('d/m/Y H:i:s') }}
                </header>
                <main class="panel-body">
                    {!! substr($post->body, 0, 179) !!}[...]
                </main>
            </div>
        </div>
         @endforeach
        
    {!! $posts->links() !!}

</div>
@endsection
