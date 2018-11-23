<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Supporter TFC">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bienvenue sur TFC Supporters: l'application mobile des supporters Toulousains</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/tfc1.png"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>

<body>

    <div class="bgHome" style="background-image:url({{url('images/supps.jpg')}})">
    </div>
    <div class="publicHome">
    </div>
    <div class="container-fluid textHome">
        <div class="lol text-center">
            <div class="text-right">
                <a href="{{route('home')}}" type="button" class="btn btnTfc btnAdmin mt-4 mr-2" title="Accès administrateur">Session Admin</a>
            </div>
            <h1 class="text-white pt-4">Bienvenue sur TFC Supporters</h1>
        </div>
            <div class="imgHome text-center">
                <img class="img-fluid" src="images/tfc.png" alt="Logo TFC">
            </div>
        <div class="lol mt-5">
            <div class="text-center">
                <a href="" type="button" class="btn btnHome mt-4 mr-2" title="Télécharger l'application TFC Supporters">TELECHARGER L'APP MOBILE</a>
            </div>
        </div>
    </div>
    
</body>

</html>