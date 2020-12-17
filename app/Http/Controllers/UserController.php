<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Listar registro
    public function index (){
        $users = User::all();
        return view('usuarios', ['users' => $users]);
    }

    //Mostrar formultario registro
    public function create (){

    }

    //Almacenar registro
    public function store (){

    }

    //Ver registro especifico
    public function show (){
        
    }

    //Actualizar registro
    public function update (){
        
    }

    //Eliminar registro
    public function destroy (){
        
    }
    
}
