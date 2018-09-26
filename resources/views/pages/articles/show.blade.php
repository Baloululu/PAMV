@extends("default")
@section('title', $page)
@section($page, 'active')

@section('content')
    <div class="container">
        <h1>{{$article->title}}</h1>
        <p>{{$article->content}}</p>
    </div>
@endsection