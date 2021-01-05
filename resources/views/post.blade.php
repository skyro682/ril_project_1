@extends('layout.app')

@section('body')
<br>
<!-- body Section-->
<section class="page-section text-white" id="1">
    <div class="col-lg-4"> </div>
    <div class="container col-lg-4 bg-primary">
        <br>
        <!-- section 1 Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">titre musique</h2>
        <h5 class=" text-center text-uppercase text-white">auteur</h5>

        <h6 class=" text-center text-uppercase">Post de : {{ $post->users->username }}</h6>
        <h6 class=" text-center text-uppercase">écrit le : {{ $post->created_at }}</h6>

        <!-- section 1 Section Content-->
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 text-center">
                <p class="lead">{{ $post->content }}</p>
            </div>
        </div>
        <!-- spotify Section-->
        <div class="text-center mt-4">
            Spotify
        </div>
        <br>
    </div>
</section>
<div style="padding: 1rem 0;"> </div>

<!-- commentaire Section-->
<section class="page-section" id="commentaire">
    <h5 class="text-center text-uppercase">Commentaire</h5>
    <!-- Foreach -->
    <div class="col-lg-4"> </div>
    <div class="container col-lg-4 bg-comment">
        @if (count($post->comments) == 0)
            <br>
            <p>Aucun commentaire</p>
            <hr>
        @endif
        @foreach ($post->comments as $comment)
            <br>
            <!-- section 1 Section Heading-->
            <p>{{ $comment->content }} | {{ $comment->created_at }} | {{ $comment->users->username }}</p> <!-- com 1-->
            <hr>
        @endforeach
    </div>
</section>

<!-- ajout commentaire Section-->
<hr>
<section class="page-section" id="add_commentaire">

    <div class="col-lg-4"> </div>
    <div class="container form-group col-lg-4 ">
        <form action="{{route('addComment', ['id' => $post->id])}}" method="POST">
            <label for="comment">Votre commentaire:</label>
            <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
            <div class="float-right mt-2">
                <button type="submit" class="btn btn-info">Ajouter</button>
            </div>
        </form>
    </div>
</section>

@endsection