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
                            {{ $comment->created_at->diffForHumans() }}

                            @if (Auth::check() && Auth::user()->isAdmin())

                                {!! Form::model($comment, ['route' => ['livre.update', $comment], 'method' => 'put']) !!}

                            <div class="form-row align-items-center">
                                <div class="col-auto">
                                    {!! Form::label('validate', 'En ligne') !!}
                                    {!! Form::checkbox('validate', null, ['class' => 'form-check-input ']) !!}
                                </div>

                                <div class="col-auto">
                                    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                                {!! Form::close() !!}

                            @endif

                        </div>
                    </div>
                @empty
                    <p>Il n'y a aucun commentaire pour le moment.</p>
                @endforelse
    </div>
@endsection