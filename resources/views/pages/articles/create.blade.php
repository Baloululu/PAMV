@extends("default")
@section('title', 'nouvel article')

@section('content')
    <div class="container">
        @include('pages/articles/flash')
        <h1>Ajouter un nouvel article</h1>

        @include('pages/articles/form')
    </div>
@endsection