@extends('layouts/main-layout')

@section('content')


<main>
    <div class="container">


        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
    
            <div class="my-3">
                <label for="title">Titolo</label>
                <input class='form-control' type="text" id="title" name="title" value="{{$comic->title}}">
            </div>
            
            <div class="my-3">
                <label for="description">Desctizione</label>
                <textarea class='form-control' type="textarea" id="description" name="description">{{$comic->description}}</textarea>
            </div>
    
            <div class="my-3">
                <label for="thumb">link Immagine</label>
                <input class='form-control' type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
            </div>
    
            <div class="my-3">
                <label for="price">Prezzo</label>
                <input class='form-control' type="text" id="price" name="price" value="{{$comic->price}}">
            </div>
    
            <div class="my-3">
                <label for="series">Serie</label>
                <input class='form-control' type="text" id="series" name="series" value="{{$comic->series}}">
            </div>
    
            <div class="my-3">
                <label for="sale_date">Data uscita</label>
                <input class='form-control' type="text" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>
    
            <div class="my-3">
                <label for="type">Tipo</label>
                <input class='form-control' type="text" id="type" name="type" value="{{$comic->type}}">
            </div>
    
            <button class="btn btn-primary my-4" type="submit">Modifica</button>
    
        </form>
    </div>
</main>
    
@endsection