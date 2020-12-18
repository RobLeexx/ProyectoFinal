@extends('layouts.app')

@section('content')
  <div class="container" style="color:#ffffff";>
      <h2 align="center">Lista de usuarios registrados <a href="usuarios/create"><button type="button" class="btn btn-success pull-right">Agregar Usuario</button></a>
  </h2>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
            <a href="{{route('usuarios.edit', $user->id)}}"><button type="button" class="btn btn-danger pull-right">Eliminar</button></a>
            <a href="{{route('usuarios.edit', $user->id)}}"><button type="button" class="btn btn-primary pull-right">Editar</button></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>

@endsection