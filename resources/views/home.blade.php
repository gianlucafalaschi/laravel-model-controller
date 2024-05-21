@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col">
                <div class="card my-3" style="width: 18rem;">
                    <div class="card-body bg-primary">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">id: {{$movie->id}}</li>
                            <li class="list-group-item">Titolo: {{$movie->title}}</li>
                            <li class="list-group-item">Titolo Originale: {{$movie->original_title}} </li>
                            <li class="list-group-item">Nazionalità: {{$movie->nationality}} </li>
                            <li class="list-group-item">Data: {{$movie->date}} </li>
                            <li class="list-group-item">Voto: {{$movie->vote}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
@endsection