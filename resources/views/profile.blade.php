@extends('layout.app')
<?php use App\Models\User; ?>
<?php use App\Models\Grade; ?>

@section('body')
<br>
<?php
if (isset($_SESSION['user']['username'])) {
    $User_active = User::with('Grade')->where('username', $_SESSION['user']['username'])->first();
}
?>
<!-- body Section-->
<section class="page-section text-white" id="1">
    <div class="col-lg-2"> </div>
    <div class="container col-lg-6 bg-3">
        <br>
        <!-- section 1 Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Compte</h2>
        <br>
        <?php $User = User::with('Grade')->where('username', $_SESSION['user']['username'])->first() ?>
        <h6 class=" text-center text-uppercase">Pseudo : {{ $_SESSION['user']['username'] }}</h6>
        <h6 class=" text-center text-uppercase">Nom : {{ $User->name }}</h6>
        <h6 class=" text-center text-uppercase">Prénom : {{ $User->last_name }}</h6>
        <h6 class=" text-center text-uppercase">Email : {{ $User->email }}</h6>
        <h6 class=" text-center text-uppercase">Rôle : {{ $User->grade->name }}</h6>
        <a onclick="location.href='{{ route('deleteUserB', ['id' => $User->id]) }}'">supprimer</a>
        <!-- section 1 Section Content-->
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 text-center">
                <p class="lead"></p>
            </div>
        </div>
        <br>
    </div>
</section>
<div style="padding: 1rem 0;"> </div>


@endsection