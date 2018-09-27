@extends("default")
@section('title', $page)
@section($page, 'active')

@section('content')
    <div class="container">

        @auth
            <div class="text-center" style="margin-bottom: 10px">
                <a href="{{ route('article.create') }}" class="btn btn-primary">Ajouter un nouvel article</a>
            </div>
        @endauth

        <div class="row">

            <div class="card-columns">

                @forelse($articles as $article)
                    <div class="card">
                        <img src="{{ $article->image }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $article->title }}
                            </h5>
                            <p class="card-text">
                                {!! str_limit($article->content, $limit = 150, $end = '...') !!}
                            </p>
                            <a href="{{ route('article.show', $article) }}" class="card-text">Lire la suite</a>
                        </div>
                        @auth
                        <div class="card-footer">
                            {!! Form::open(['route' => ['article.destroy', $article], 'method' => 'delete']) !!}
                            <div class="form-row text-center">
                                <div class="col">
                                    <a href="{{ route('article.edit', $article) }}" class="btn btn-primary" title="Editer"><i class="far fa-edit"></i></a>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-danger" title="Supprimer"><i class="far fa-trash-alt"></i></button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                        @endauth
                    </div>

                @empty
                    <div class="col-xs-12">
                        <p>Aucun article.</p>
                    </div>
                @endforelse

            </div>
        </div>

    </div>
@endsection