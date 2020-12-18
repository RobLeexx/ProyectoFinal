<?php

namespace App\Http\Controllers;

use App\Models\Perdidos;
use Illuminate\Http\Request;

class PerdidosController extends Controller
{
    public function index()
    {
        $perdidos = Perdidos::all();
        return view('perdidos.index', ['perdidos' => $perdidos]);
    }

    public function create()
    {
        return view('perdidos.create');
    }


    public function store(Request $request)
    {
        $encontrado = new Encontrados();
        $encontrado->contacto = request('contacto');
        $encontrado->titulo = request('titulo');
        $encontrado->especie = request('especie');
        $encontrado->raza = request('raza');
        $encontrado->sexo = request('sexo');
        $encontrado->edad = request('edad');
        $encontrado->descripcion = request('descripcion');
        $encontrado->ubicacion = request('ubicacion');

        $encontrado->save();

        return redirect('/encontrados');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
    }

    public function update(UserFormRequest $request, $id)
    {

    }

    public function destroy($id)
    {
       
    }
}
