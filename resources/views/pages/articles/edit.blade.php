@extends("default")
@section('title', $page)
@section($page, 'active')

@section('content')
    <div class="container">
        @include('pages.flash')
        <h1>Editer un article</h1>

        @include('pages/articles/form')
    </div>
@endsection