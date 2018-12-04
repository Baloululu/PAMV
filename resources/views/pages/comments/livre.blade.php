@extends("default")
@section('title', "Livre d'or")
@section('Livre', 'active')

@section('content')
    <div class="container">
        @include('pages.flash')
        <h1>Livre d'or</h1>

        @guest
            <div class="alert alert-info">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <a href="{{ route('login') }}" class="alert-link">Connectez vous</a> pour laisser un commentaire !
            </div>
            @else
                @include('pages/comments/form')
                @endguest

                @forelse($comments as $comment)
                    <div class="card mt-3">
                        <div class="card-header">
                            {{ $comment->user->name }}
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $comment->content }}</p>
                        </div>
                        <div class="card-footer text-right">
                            @if (Auth::check() && Auth::user()->isAdmin())

                                <div class="form-row align-items-center float-right">

                                    <div class="col-auto">
                                        {!! Form::open(['route' => ['livre.update', $comment], 'method' => 'put']) !!}

                                        {!! Form::label('validate'.$comment->id, 'En ligne', ['style' => 'cursor:pointer']) !!}
                                        {!! Form::checkbox('validate'.$comment->id, null, $comment->validate, ['onChange' => "this.form.submit()", 'style' => 'cursor:pointer']) !!}

                                        {!! Form::close() !!}
                                    </div>

                                    <div class="col-auto">
                                        {!! Form::open(['route' => ['livre.destroy', $comment], 'method' => 'delete']) !!}

                                        <button type="submit" class="btn btn-danger" title="Supprimer"><i class="far fa-trash-alt"></i></button>

                                        {!! Form::close() !!}
                                    </div>

                                    <div class="col-auto">
                                        {{ $comment->created_at->diffForHumans() }}
                                    </div>
                                </div>
                            @else
                                {{ $comment->created_at->diffForHumans() }}
                            @endif

                        </div>
                    </div>
                @empty
                    <p>Il n'y a aucun commentaire pour le moment.</p>
                @endforelse
    </div>
@endsection