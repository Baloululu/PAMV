@extends("default")
@section('title', $page)
@section($page, 'active')

@section('content')
    <div class="container">

        @if (Auth::check() && Auth::user()->isAdmin())
            <div class="text-center" style="margin-bottom: 10px">
                <a href="{{ route('articles.create') }}" class="btn btn-primary">Ajouter un nouvel article</a>
            </div>
        @endif

        <h1>{{ $page }}</h1>

        <div class="card-columns">

            @forelse($articles as $article)
                <div class="card">
                    <img src="{{ $article->image }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $article->title }}
                        </h5>
                        <p class="card-text">
                            {{ $article->intro }}
                        </p>
                        <a href="{{ route('articles.show', $article) }}" class="card-text">Plus de détails</a>
                    </div>
                    <div class="card-footer text-right">
                        {{ $article->created_at->diffForHumans() }}
                        @if (Auth::check() && Auth::user()->isAdmin())
                            {!! Form::open(['route' => ['articles.destroy', $article], 'method' => 'delete']) !!}
                            <div class="form-row text-center">
                                <div class="col">
                                    <a href="{{ route('articles.edit', $article) }}" class="btn btn-primary" title="Editer"><i class="far fa-edit"></i></a>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-danger" title="Supprimer"><i class="far fa-trash-alt"></i></button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>

            @empty
                <div class="col-xs-12">
                    <p>Aucun article.</p>
                </div>
            @endforelse

        </div>
    </div>

@endsection