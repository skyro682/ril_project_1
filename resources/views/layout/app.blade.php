<!DOCTYPE html>
<html lang="en">

<?php use App\Models\User; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ril_project_1</title>

    <!-- Script -->
    <link rel="stylesheet" href="{{ app('url')->asset('js/script.js', null) }}">
    <!-- Style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ app('url')->asset('css/styles.css', null) }}">
</head>

<body class="">
    <!-- Navigation-->
    <nav class="navbar bg-nav text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="{{ route('home') }}">Musica</a>
            @if(!isset($_SESSION['user']['username']))
                <button type="button" class="btn btn-info ml-auto mr-2" onclick="location.href='{{route('inscription')}}'">Inscription</button>
                <button type="button" class="btn btn-info" onclick="location.href='{{route('connexion')}}'">Connecter</button>
            @else 
                <a class="ml-auto mr-4 my-auto text-white" onclick="location.href='{{ route('profile')}}'">{{ $_SESSION['user']['username'] }}</a>
                <button type="button" class="btn btn-info mx-2" onclick="location.href='{{route('addPost')}}'"> + </button>
                <button type="button" class="btn btn-info mx-2" onclick="location.href='{{route('logout')}}'">Déconnecter</button>
                @if(isset($_SESSION['user']['username']) && User::where('username', $_SESSION['user']['username'])->first()->grade_id == 3)
                    <button type="button" class="btn btn-info" onclick="location.href='{{route('manageUsers')}}'">Gestion des utilisateur</button>
                @endif
            @endif
        </div>
    </nav>
    <div style="padding: 5rem 0;"> </div>

    @yield('body')

    <!-- Copyright Section-->
    <div style="padding: 5rem 0;"> </div>
    <div class="copyright py-4 text-center text-white fixed-bottom">
        <div class="container"><small>Copyright © Musica 2020</small></div>
    </div>
</body>
</html>
