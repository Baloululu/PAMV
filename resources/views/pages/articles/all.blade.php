@extends("default")
@section('title', $page)
@section($page, 'active')

@section('content')
    <div class="container">

        @auth
            <a href="{{ route('article.create') }}" class="btn btn-primary">Ajouter</a>
        @endauth

        <div class="row">
            @forelse($articles as $article)
                <div class="col-xs-12 col-sm-4">
                    <h1>{{$article->title}}</h1>
                    <p>{{$article->content}}</p>

                    @auth
                        {!! Form::open(['route' => ['article.destroy', $article], 'method' => 'delete', 'class' => 'form-inline formSupp']) !!}
                            <div class="form-group">
                                <a href="{{ route('article.edit', $article) }}" class="btn btn-primary">Editer</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </div>
                        {!! Form::close() !!}
                    @endauth
                </div>

            @empty
                <div class="col-xs-12">
                    <p>Aucun article.</p>
                </div>
            @endforelse
        </div>

    </div>
@endsection