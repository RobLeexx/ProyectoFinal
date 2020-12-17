@extends('layouts.app')

@section('content')

    <form action='/usuarios' method='POST'>
        @csrf
        <div class="form-group">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name" placeholder="Escribe tu nombre">
        </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="Escribe tu email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Escribe tu contraseña">
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
    <button type="button" class="btn btn-danger">Cancelar</button>
    </form>

@endsection