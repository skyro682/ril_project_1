@extends('layout.app')

@section('body')
    <form action="{{ route('register') }}" method="post" class="section">
    <link rel="stylesheet" href="../public/css/styles2.css" media="screen" type="text/css" />
        <p><input type="email" name="email" placeholder="Email"></p>
       <p> <input type="username" name="username" placeholder="Nom d'utilisateur"></p>
        <p><input type="name" name="name" placeholder="Prénom"></p>
       <p> <input type="last_name" name="last_name" placeholder="Nom de famille"></p>
       <p> <input type="password" name="password" placeholder="Mot de passe"></p>
       <p> <input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)"></p>
      <p>  <input type="submit" value="M'inscrire">
    </form>
@endsection