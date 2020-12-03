@extends('layout.app')

@section('body')
<br>
<!-- body Section 1-->


    <section class="page-section bg-primary text-white" id="1">
        <div class="container">
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
        </div>
    </section>

<!-- body Section 2-->
<section class="page-section" id="2">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase">titre musique</h2>
        <h5 class=" text-center text-uppercase">auteur</h5>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 text-center">
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
    </div>
</section>
<br>
@endsection