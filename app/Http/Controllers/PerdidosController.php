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
        $perdido = new Perdidos();
        $perdido->contacto = request('contacto');
        $perdido->titulo = request('titulo');
        $perdido->especie = request('especie');
        $perdido->raza = request('raza');
        $perdido->sexo = request('sexo');
        $perdido->edad = request('edad');
        $perdido->descripcion = request('descripcion');
        $perdido->ubicacion = request('ubicacion');

        $perdido->save();

        return redirect('/perdidos');
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
