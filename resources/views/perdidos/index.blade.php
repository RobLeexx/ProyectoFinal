@extends('layouts.app')

@section('content')

<div class="container">
      <h2 align="center" style="color:#ffffff";>Mascotas Perdidas<a href="perdidos/create"><button type="button" class="btn btn-success pull-right">Agregar mascota</button></a>
  </h2>
  
</br>
<div class="row">

    @foreach($perdidos as $perdido)
        <div class="col-sm-6">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><b>{{$perdido->titulo}}</b></h5>
            <p class="small float-right" style="color:#ffffff";>{{$perdido->fecha_creacion}}</p>
            <p class="card-text" style="color:#ffffff";>{{$perdido->descripcion}}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Especie: </br> {{$perdido->especie}}</li>
            @if($perdido->raza==null)
            <li class="list-group-item">Raza: </br> Desconocido</li>
            @else
            <li class="list-group-item">Raza: </br> {{$perdido->raza}}</li>
            @endif
            @if($perdido->sexo==null)
            <li class="list-group-item">Sexo: </br> Desconocido</li>
            @else
            <li class="list-group-item">Sexo: </br> {{$perdido->sexo}}</li>
            @endif
            @if($perdido->edad==null)
            <li class="list-group-item">Edad: </br> Desconocido</li>
            @else
            <li class="list-group-item">Edad: </br> {{$perdido->edad}}</li>
            @endif
            <li class="list-group-item">Perdido en: </br> {{$perdido->ubicacion}}</li>
            <li class="list-group-item">Contacto: </br> {{$perdido->contacto}}</li>
        </ul>
        <div class="card-body" align="center">
            <a href="#" class="card-link">Ver</a>
        </div>
        </div>
    @endforeach

</div>
<br>

@endsection