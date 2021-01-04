@extends('layout.app')

@section('body')
    <form   method="post" class="section">


    <link rel="stylesheet" href="../public/css/styles2.css" media="screen" type="text/css" />
        <input type="email" name="email" placeholder="Email">
        <input type="username" name="username" placeholder="Nom d'utilisateur">
        <input type="name" name="name" placeholder="Prénom">
        <input type="last_name" name="last_name" placeholder="Nom de famille">
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)">
        <input type="submit" value="M'inscrire">
    </form>
@endsection