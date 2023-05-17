@extends('layouts/main-layout')

@section('content')

<main>
    <div class="container">


        <form action="{{route('comics.store')}}" method="POST">
            @csrf
    
            <div class="my-3">
                <label for="title">Titolo</label>
                <input type="text" id="title" name="title">
            </div>
            
            <div class="my-3">
                <label for="description">Desctizione</label>
                <textarea type="textarea" id="description" name="description"></textarea>
            </div>
    
            <div class="my-3">
                <label for="thumb">link Immagine</label>
                <input type="text" id="thumb" name="thumb">
            </div>
    
            <div class="my-3">
                <label for="price">Prezzo</label>
                <input type="text" id="price" name="price">
            </div>
    
            <div class="my-3">
                <label for="series">Serie</label>
                <input type="text" id="series" name="series">
            </div>
    
            <div class="my-3">
                <label for="sale_date">Data uscita</label>
                <input type="text" id="sale_date" name="sale_date">
            </div>
    
            <div class="my-3">
                <label for="type">Tipo</label>
                <input type="text" id="type" name="type">
            </div>
    
            <button class="btn btn-primary my-4" type="submit">Aggiungi</button>
    
        </form>
    </div>
</main>
    
@endsection