@extends('layout.app')
<?php

use App\Models\User;
use App\Models\Grade; ?>

@section('body')
<br>

<!-- Users list Section-->
<?php
if (isset($_SESSION['user']['username'])) {
    $User_active = User::with('Grade')->where('username', $_SESSION['user']['username'])->first();
}
?>
<section class="page-section" id="commentaire">

    <h2 class="text-center text-uppercase">Gestions des utilisateurs</h2>
    <!-- Foreach -->
    <div class="col-lg-2"> </div>
    @if(isset($_SESSION['user']['username']) && $User_active->grade_id == 3)
    <div class="container col-lg-6 bg-comment">
        @if (count($users) == 0)
        <br>
        <p>Aucun utilisateur</p>
        <hr>
        @endif
        @foreach ($users as $user)
        <br>

        <!-- section 1 Section Heading-->
        <p>{{ $user->id }} | {{ $user->username }} | {{ $user->name }} | {{ $user->last_name }} | {{ $user->email }} | {{ $user->created_at }} | {{ $user->updated_at }} | </p> <!-- com 1-->
        @if(isset($_SESSION['user']['username']) && ($User_active->grade_id = 3))
        <a onclick="location.href='{{ route('deleteUser', ['id' => $user->id]) }}'">supprimer</a>
        @endif
        <hr>
        @endforeach
        @else
        <p>Vous n'avez pas l'autorisation d'acceder à ces données.</p>
        @endif
    </div>

</section>


<section class="">
    <div class="col-lg-4"> </div>
    <div class="container col-lg-4">
        <br>
        <div class="text-center mt-4">
            {{ $users->links() }}
        </div>
        <br>
    </div>
</section>



@endsection