<?php

namespace App\Http\Controllers;

use App\Models\Encontrados;
use Illuminate\Http\Request;

class EncontradosController extends Controller
{
    public function mascotas()
    {
        return view('encontrados.mascotas', ['encontrados' => Encontrados::all()]);
    }
}
