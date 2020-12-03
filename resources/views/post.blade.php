@extends('layout.app')

@section('body')
<br>
<!-- body Section 1-->


<section class="page-section text-white" id="1">
    <div class="col-lg-4"> </div>
    <div class="container col-lg-4 bg-primary">
        <br>
        <!-- section 1 Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">titre musique</h2>
        <h5 class=" text-center text-uppercase text-white">auteur</h5>

        <!-- section 1 Section Content-->
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 text-center">
                <p class="lead">Contenu.</p>
            </div>
        </div>
        <!-- spotify Section-->
        <div class="text-center mt-4">
            Spotify
        </div>
        <!-- more Section-->
        <div class="text-center mt-4">
            <button type="button" class="btn btn-info">Voir plus...</button>
        </div>
        <br>
    </div>
</section>

@endsection