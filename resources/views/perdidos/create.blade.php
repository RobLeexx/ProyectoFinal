@extends('layouts.app')

@section('content')

<h2 align="center"  style="color:#ffffff";>Registrar nueva mascota</h2>
    <form action='/perdidos' method='POST'>
        @csrf
    <div class="mb-3" style="color:#ffffff";>
        <label for="contacto" class="form-label">Contacto</label>
        <input type="text" class="form-control" name="contacto" placeholder="Escribe tu nombre">
    </div>
    <div class="mb-3" style="color:#ffffff";>
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" name="titulo" placeholder="Escribe tu email">
    </div>
    </br>
    <div class="mb-3" style="color:#ffffff";>
        <label for="especie" class="form-label">especie</label>
        <input type="text" class="form-control" name="especie" placeholder="Escribe tu contraseña">
    </div>
    <div class="mb-3" style="color:#ffffff";>
        <label for="raza" class="form-label">raza</label>
        <input type="text" class="form-control" name="raza" placeholder="Escribe tu contraseña">
    </div>
    <div class="mb-3" style="color:#ffffff";>
        <label for="sexo" class="form-label">sexo</label>
        <input type="text" class="form-control" name="sexo" placeholder="Escribe tu contraseña">
    </div>
    <div class="mb-3" style="color:#ffffff";>
        <label for="edad" class="form-label">edad</label>
        <input type="text" class="form-control" name="edad" placeholder="Escribe tu contraseña">
    </div>
    <div class="mb-3" style="color:#ffffff";>
        <label for="descripcion" class="form-label">descripcion</label>
        <input type="textarea" class="form-control" name="descripcion" placeholder="Escribe tu contraseña">
    </div>
</br>
    <div class="mb-3" style="color:#ffffff";>
        <label for="ubicacion" class="form-label">ubicacion</label>
        <input type="text" class="form-control" name="ubicacion" placeholder="Escribe tu contraseña">
    </div>
    </br>
    <button type="submit" class="btn btn-primary">Registrar</button>
    <button type="button" class="btn btn-danger">Cancelar</button>

@endsection