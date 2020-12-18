<?php

namespace App\Http\Controllers;

use App\Models\Encontrados;
use Illuminate\Http\Request;

class EncontradosController extends Controller
{
    public function index()
    {
        $encontrados = Encontrados::all();
        return view('encontrados.index', ['encontrados' => $encontrados]);
    }

    public function create()
    {
        return view('encontrados.create');
    }

    public function store(Request $request)
    {
        
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
