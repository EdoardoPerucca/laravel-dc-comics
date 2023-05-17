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

        <hr>

        <div class="row my-3">

            <div class="col-6">
                <a href="{{route('comics.edit', $comic->id)}}">Modifica il fumetto</a>
            </div>
    
            <div class="col-6">

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Cancella
                  </button>
                  
                  
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Sei sicuro di voler cancellare il fumetto?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit">Cancella</button>
                          </form>
                          
                        </div>
                      </div>
                    </div>
                  </div>

              
            </div>

        </div>

    </main>
    
@endsection