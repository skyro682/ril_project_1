@extends('layout.app')

@section('body')
<br>
<!-- body Section-->
<section class="page-section" id="1">
    <div class="col-lg-4"> </div>
    <form method="POST" action="{{ route('addPostForm') }}" class="container col-lg-4">
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="titre_add_post">Titre</span>
            </div>
            <input type="text" class="form-control" placeholder="Exemple : 'Blinding Lights'" aria-label="Titre" aria-describedby="titre_add_post">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="auteur_add_post">Auteur</span>
            </div>
            <input type="text" class="form-control" placeholder="Exemple : 'The Weeknd'" aria-label="Auteur" aria-describedby="auteur_add_post">
        </div>
        <label for="comment">Votre avis :</label>
        <textarea class="form-control" rows="5" id="comment" name="content"></textarea>
        <br>
        <div class=float-right>
            <button type="submit" class="btn btn-info">Poster</button>
        </div>
    </form>
</section>
<div style="padding: 1rem 0;"> </div>

@endsection