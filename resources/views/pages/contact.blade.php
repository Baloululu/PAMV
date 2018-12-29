@extends("default")
@section('title', "Contacts")
@section("Contacts", 'active')

@section('head')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
          integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
          crossorigin=""/>
@endsection

@section('content')
    <div class="container">
        <h1>Contacts</h1>
        @include('pages/erreurs')
        @include('pages/flash')

        <div>
            {!! Form::open(['route' => 'mail', 'method' => 'post', 'id' => 'mail-form']) !!}

            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                        {!! Form::label('email', 'Votre adresse mail') !!}
                        {!! Form::email('email', Auth::check() ? Auth::user()->email : null, ['class' => 'form-control '.($errors->has('email') ? ' is-invalid' : ''), 'required' => 'required']) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="form-group">
                        {!! Form::label('object', 'Objet') !!}
                        {!! Form::text('object', null, ['class' => 'form-control '.($errors->has('object') ? ' is-invalid' : ''), 'required' => 'required']) !!}
                    </div>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('content', 'Message') !!}
                {!! Form::textArea('content', null, ['class' => 'form-control', 'required' => 'required']) !!}
            </div>

            <div class="form-group">
                {!! Form::button('Envoyer', ['class' => 'btn btn-primary g-recaptcha', 'data-sitekey' => '6LdsaEQUAAAAAG6GioSQ_y_SF5zawRTPIsRIw4s6', 'data-callback' => 'onSubmit']) !!}
            </div>

            {!! Form::close() !!}
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-6 offset-md-3">
                <fieldset class="contactsFieldset">
                    <legend>Laurence Fady</legend>
                    <p>
                        13 Rue du pré Martin<br>
                        88360 Rupt Sur Moselle<br>
                    </p>
                </fieldset>
            </div>
        </div>

        <h1>Autres magasins</h1>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <fieldset class="contactsFieldset">
                    <legend>Kiou</legend>
                    <p>
                        2 Quai de la Parelle<br>
                        88360 Rupt Sur Moselle<br>
                        <a href="http://maisondebeautekiou.com/" target="_blank">Site web</a>
                    </p>
                </fieldset>
            </div>
            <div class="col-xs-12 col-md-6">
                <fieldset class="contactsFieldset">
                    <legend>L'Aura Zen</legend>
                    <p>
                        12 Rue Albert Jacquemin<br>
                        88120 Vagney<br>
                        <a href="http://laurazenesthetique.fr/" target="_blank">Site web</a>
                    </p>
                </fieldset>
            </div>
        </div>
    </div>

    <div class="w3-light-gray">
        <div class="container">
            <div id="map" class="mapContainer"></div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
            integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
            crossorigin=""></script>
    <script src="{{ asset('js/openmap.js') }}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function onSubmit(token) {
            document.getElementById("mail-form").submit();
        }
    </script>

@endsection