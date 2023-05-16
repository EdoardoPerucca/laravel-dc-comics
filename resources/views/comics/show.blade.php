@extends('layouts/main-layout')

@section('content')

    <main class="text-center">

        <div class="img-main-container">
            <img src="{{$comic->thumb}}" alt="immagine">

        </div>

        <h1>{{$comic->title}}</h1>

        <ul>
            <li>
                Serie: {{$comic->series}}
            </li>
            <li>
                Tipo: {{$comic->type}}
            </li>
            <li>
                Data: {{$comic->sale_date}}
            </li>
            <li>
                Prezzo: {{$comic->price}}
            </li>
            <li>
                Descrizione: {{$comic->description}}
            </li>
            
        </ul>
    </main>
    
@endsection