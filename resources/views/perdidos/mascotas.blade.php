@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-around">

    @foreach($perdidos as $perdido)
        <div class="card" style="width: 25rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><b>{{$perdido->titulo}}</b></h5>
            <p class="small float-right" style="color:#ffffff";>{{$perdido->fecha_creacion}}</p>
            <p class="card-text" style="color:#ffffff";>{{$perdido->descripcion}}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Especie: </br> {{$perdido->especie}}</li>
            <li class="list-group-item">Raza: </br> {{$perdido->raza}}</li>
            <li class="list-group-item">Sexo: </br> {{$perdido->sexo}}</li>
            <li class="list-group-item">Edad: </br> {{$perdido->edad}}</li>
            <li class="list-group-item">Perdido en: </br> {{$perdido->ubicacion}}</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Ver</a>
        </div>
        </div>
        </br>
    @endforeach
    
</div>

@endsection