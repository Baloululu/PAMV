@extends("default")
@section('title', $page)
@section($page, 'active')

@section('content')
    <div class="container">
        <h1>{{$article->title}}</h1>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8">
                <img src="../{{ $article->image }}" alt="" class="rounded" style="width: 100%">
            </div>
        </div>

        <div class="text-justify" style="margin-top: 15px">
            {!! $article->content !!}
        </div>
    </div>
@endsection