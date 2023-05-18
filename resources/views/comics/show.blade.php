@extends('layouts/main-layout')

@section('content')

  <main>

    <div class="top-main-comic">

    </div>

    <div class="container-800">

      <div class="comic-inner">

        
        <div class="text-comic-inner col-8">
          
          <h1>{{$comic->title}}</h1>

          <p class="price-comic-inner"><span class="price-comic-color">U.S. Price:</span> {{$comic->price}}</p>

          <p>Descrizione: {{$comic->description}}</p>
        
        </div>
          
        <div class="img-comic-inner col-4">
          <div class="text-img-comic-inner">
            Advertisement
          </div>
            <img src="{{$comic->thumb}}" alt="immagine">
  
        </div>

      </div>

    </div>

    <div class="detail-comic-bg">

      <div class="container-800">

        <div class="detail-comic-inner">
  
          <div class="detail-comic-left col-6">
            <h3>Talent</h3>

            <table style="width:100%">
              <tr>
                <th>Art by:</th>
                <td></td>
              </tr>
              <tr>
                <th>Written by:</th>
                <td></td>
              </tr>
             
            </table>
          </div>
  
          <div class="detail-comic-right col-6">
            <h3>Specs</h3>
          
            <table style="width:100%">
              <tr>
                <th>Serie:</th>
                <td>{{$comic->series}}</td>
              </tr>
              <tr>
                <th>Prezzo:</th>
                <td>{{$comic->price}}</td>
              </tr>
              <tr>
                <th>Data:</th>
                <td>{{$comic->sale_date}}</td>
              </tr>
            </table>
            
          </div>
  
        </div>

      </div>

    </div>

    <div class="container-800">

      <div class="row my-3 text-center">
  
        <div class="col-6">
            <a href="{{route('comics.edit', $comic->id)}}"><button type="button" class="btn btn-primary">Modifica il fumetto</button></a>
        </div>
  
        <div class="col-6">
  
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
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

    </div>


  </main>
    
@endsection