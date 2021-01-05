@extends('layout.app')

@section('body')
<br>
<!-- body Section 1-->
<?php $i = 0; ?>
@foreach ($posts as $post)
    <section class="page-section {{ ($i%2 == 0) ? 'text-white' : '' }}" id="{{ $post->id }}">
        <div class="col-lg-4"> </div>
        <div class="container col-lg-4 {{ ($i%2 == 0) ? 'bg-primary' : 'bg-secondary' }}">
            <br>
            <!-- Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase {{ ($i%2 == 0) ? 'text-white' : '' }}">Titre musique</h2>
            <h5 class=" text-center text-uppercase {{ ($i%2 == 0) ? 'text-white' : '' }}">Artiste</h5>
            
            <h6 class=" text-center text-uppercase {{ ($i%2 == 0) ? 'text-white' : '' }}">Post de : {{ $post->users->username }}</h6>
            <h6 class=" text-center text-uppercase {{ ($i%2 == 0) ? 'text-white' : '' }}">écrit le : {{ $post->created_at }}</h6>

            <!-- Section Content-->
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
            <!-- more Section-->
            <div class="text-center mt-4">
                <button type="button" class="btn btn-info" onclick="location.href='{{ route('post', ['id' => $post->id]) }}'">Voir plus...</button>
            </div>
            <br>
        </div>
    </section>
    <?php $i++; ?>
@endforeach

{{ $posts->links() }}

<!-- FIN Foreach -->
@endsection