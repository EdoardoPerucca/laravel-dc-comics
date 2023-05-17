@extends('layouts/main-layout')

@section('content')

<main>

    <div class="main-bg-cards">

        <div class="container-1000">

            <div class="button-main">
                <a href="{{route('comics.create')}}"><button>Aggiungi un fumetto</button></a>
            </div>

            <div class="row">

                @foreach ($comics as $singleComics)
                <div class="col-2 comics-card">
                    <a href="{{route('comics.show', $singleComics->id)}}" class="comics-card-inner">
                        <div class="img-main-container">
                            <img src="{{ $singleComics->thumb }}" alt="immagine">
                        </div>
                        <div class="comic-text">
                            {{ $singleComics->series }}
                        </div>         
                    </a>
                </div>
                @endforeach
            </div>

            <div class="button-main">
                <a href="#"><button>Load More</button></a>
            </div>
        </div>

    </div>

    
</main>

@endsection