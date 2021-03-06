<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{ asset("img/favicon.png") }}" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" media="none" onload="if(media!='all')media='all'">

    @yield('head')

    <title>{{ config('app.name', 'Laravel') }} : @yield('title')</title>
</head>
<body>

<!-- Header -->
<header>
    <div class="fondAlpha">
        <h1 class="w3-text-pink">Pierres aux milles vertus</h1>
        <h4 class="w3-text-light-blue">Bracelets anti-stress, sommeil, ménopause...</h4>
    </div>
</header>

<nav class="navbar navbar-expand-md fixed-top navbar-dark box-shadow">
    <a href="{{route('accueil')}}" class="navbar-brand" style="font-size: 0px;">
        <svg class="@yield('Accueil')" style="width: 40px; height: 40px">
            <use xlink:href="{{ asset("img/SVG-icons.svg") }}#quality" />
        </svg>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="@yield('Bracelets')">
                <a href="{{route('bracelets')}}" class="nav-link">Bracelets</a>
            </li>
            <li class="@yield('Colliers')">
                <a href="{{route('colliers')}}" class="nav-link">Colliers</a>
            </li>
            <li class="@yield('Pierres')">
                <a href="{{route('pierres')}}" class="nav-link">Pierres</a>
            </li>
            <li class="@yield('Boucles d\'oreilles')">
                <a href="{{ route('boucles') }}" class="nav-link">Boucles d'oreilles</a>
            </li>
            <li class="@yield('Portes clefs')">
                <a href="{{ route('clefs') }}" class="nav-link">Porte-clefs</a>
            </li>
            <li class="@yield('Livre')">
                <a href="{{ route('livre.index') }}" class="nav-link">Livre d'or</a>
            </li>
            <li class="@yield('Contacts')">
                <a href="{{ route('contacts') }}" class="nav-link">Contacts</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li>
                <a href="{{ route('home') }}" class="nav-link" title="Mon espace"><i class="far fa-user"></i></a>
            </li>
        </ul>
    </div>
</nav>

<div class="page">
    @yield('content')
</div>

<footer>
    <a href="mailto:pamv88@orange.fr" title="pamv88@orange.fr"><i class="fas fa-envelope"></i></a>
    <a href="https://www.facebook.com/fadylaurence/" target="_blank"><i class="fab fa-facebook-square"></i></a>
</footer>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

@yield('scripts')
</html>
