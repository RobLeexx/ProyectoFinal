@extends('layouts.app')

@section('content')

<h2>Editar usuario: {{$user->name}}</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('usuarios.update', $user->id)}}" method='POST'>
    @method('PATCH')    
    @csrf
        <div class="form-group">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" value="{{$user->name}}" name="name" placeholder="Escribe tu nombre">
        </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" value="{{$user->email}}" name="email" placeholder="Escribe tu email">
    </div>
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
    <button type="button" class="btn btn-danger">Cancelar</button>
    </form>

@endsection