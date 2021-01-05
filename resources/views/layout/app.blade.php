<!DOCTYPE html>
<html lang="en">

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
            <a class="navbar-brand js-scroll-trigger" href="#page-top" onclick="location.href='{{route('home')}}'">Musica</a>
            <button type="button" class="btn btn-info" style="margin-Left: auto;" onclick="location.href='{{route('addPost')}}'"> + </button>
            <button type="button" class="btn btn-info" style="margin-Left: 5px;">Se connecter</button>
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