@extends('layouts.app')

@section('content')

<div class="container">
      <h2 align="center" style="color:#ffffff";>Mascotas Encontradas<a href="encontrados/create"><button type="button" class="btn btn-success pull-right">Agregar mascota</button></a>
  </h2>
  
</br>
<div class="row">

    @foreach($encontrados as $encontrado)
        <div class="col-sm-6">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><b>{{$encontrado->titulo}}</b></h5>
            <p class="small float-right" style="color:#ffffff";>{{$encontrado->fecha_creacion}}</p>
            <p class="card-text" style="color:#ffffff";>{{$encontrado->descripcion}}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Especie: </br> {{$encontrado->especie}}</li>
            @if($encontrado->raza==null)
            <li class="list-group-item">Raza: </br> Desconocido</li>
            @else
            <li class="list-group-item">Raza: </br> {{$encontrado->raza}}</li>
            @endif
            @if($encontrado->sexo==null)
            <li class="list-group-item">Sexo: </br> Desconocido</li>
            @else
            <li class="list-group-item">Sexo: </br> {{$encontrado->sexo}}</li>
            @endif
            @if($encontrado->edad==null)
            <li class="list-group-item">Edad: </br> Desconocido</li>
            @else
            <li class="list-group-item">Edad: </br> {{$encontrado->edad}}</li>
            @endif
            <li class="list-group-item">Encontrado en: </br> {{$encontrado->ubicacion}}</li>
            <li class="list-group-item">Contacto: </br> {{$encontrado->contacto}}</li>
        </ul>
        <div class="card-body" align="center">
            <a href="#" class="card-link">Ver</a>
        </div>
        </div>
    @endforeach

</div>
<br>

@endsection
