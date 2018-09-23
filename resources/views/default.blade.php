<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>PAMV : @yield('title')</title>
</head>
<body>

<nav class="navbar navbar-expand-md fixed-top w3-gray navbar-dark box-shadow">
    <a href="{{route('accueil')}}" class="navbar-brand">Logo</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item @yield('Accueil')">
                <a href="{{route('accueil')}}" class="nav-link">Accueil</a>
            </li>
            <li class="nav-item @yield('Bracelets')">
                <a href="{{route('bracelets')}}" class="nav-link">Bracelets</a>
            </li>
            <li class="nav-item @yield('Colliers')">
                <a href="{{route('colliers')}}" class="nav-link">Colliers</a>
            </li>
            <li class="nav-item @yield('Pierres')">
                <a href="{{route('pierres')}}" class="nav-link">Pierres</a>
            </li>
            <li class="nav-item @yield('Livre')">
                <a href="#" class="nav-link">Livre d'or</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Header -->
<header>
    <div class="fondAlpha">
        <h1 class="w3-text-pink" style="font-size: 5rem; margin-bottom: 32px;">Pierres aux milles vertus</h1>
        <h4 class="w3-text-blue">Bracelets anti-stress, sommeil, ménopause...</h4>
    </div>
</header>

<div class="page">
    @yield('content')
</div>

<footer>
    <div class="container">
        <a href="mailto:pamv88@orange.fr"><i class="fa fa-envelope w3-text-gray"></i></a>
        <a href="https://www.facebook.com/fadylaurence/" target="_blank"><i class="fa fa-facebook-official w3-text-gray"></i></a>
    </div>
</footer>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</html>
