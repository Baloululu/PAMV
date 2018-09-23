@extends("default")
@section('title', 'Bracelets')
@section($page, 'active')

@section('content')
    <div class="container">
        @forelse($articles as $article)
            <h1>{{$article->title}}</h1>
            <p>{{$article->content}}</p>
        @empty
            <p>Aucun article</p>
        @endforelse
    </div>
@endsection