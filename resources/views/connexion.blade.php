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
            
            <form action="{{route('login')}}" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Adress mail</b></label>
                <input type="text" placeholder="Entrer l'email" name="email" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >

            </form>
        </div>
    </body>
</html>



@endsection