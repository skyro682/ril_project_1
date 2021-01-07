@extends('layout.app')

@section('body')

<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet"href="../public/css/styles2.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="{{route('connexion')}}" method="get">
                <h1>Connexion</h1>
                <br>
                <p> Erreur : {{ $error }}</p>
                <input type="submit" id='submit' value='Réessayer' >

            </form>
        </div>
    </body>
</html>



@endsection




