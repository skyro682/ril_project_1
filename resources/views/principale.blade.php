@extends('layout.app')

@section('body')

<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="../public/css/styles2.css" media="screen" type="text/css" />
    </head>
    <body style='background:#fff;'>
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "Bonjour $user, vous êtes connecté";
                }
            ?>
            
        </div>
    </body>
</html>

@endsection