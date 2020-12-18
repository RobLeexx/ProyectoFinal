<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncontradosController extends Controller
{
    public function mascotas()
    {
        return view('encontrados.mascotas');
    }
}
