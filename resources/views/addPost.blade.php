@extends('layout.app')

@section('body') 
<br>
<!-- body Section-->
<section class="page-section" id="1">
    <div class="col-lg-4"> </div>
    @if(!isset($post))
    <form method="POST" action="{{ route('addPostForm')}}" class="container col-lg-4">
    @else
    <form method="POST" action="{{ route('updatePost', ['id' => $post->id])}}" class="container col-lg-4">
    @endif
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="titre_add_post">Titre</span>
            </div>
            <input name="title" type="text" class="form-control" placeholder="Exemple : 'Blinding Lights'" aria-label="Titre" aria-describedby="titre_add_post" value="{{ (isset($post)) ? $post->music_title : '' }}">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="auteur_add_post">Auteur</span>
            </div>
            <input name="artist" type="text" class="form-control" placeholder="Exemple : 'The Weeknd'" aria-label="Auteur" aria-describedby="auteur_add_post" value="{{ (isset($post)) ? $post->music_artist : '' }}">
        </div>
        <label for="comment">Votre avis :</label>
        <textarea class="form-control" rows="5" id="comment" name="content">{{ (isset($post)) ? $post->content : '' }}</textarea>
        <br>
        <div class=float-right>
            <button type="submit" class="btn btn-info"> {{ (isset($post)) ? 'Modifier' : 'Poster' }} </button>
        </div>
    </form>
</section>
<div style="padding: 1rem 0;"> </div>

@endsection