<?php

namespace App\Http\Controllers;

use App\Models\Perdidos;
use Illuminate\Http\Request;

class PerdidosController extends Controller
{
    public function mascotas()
    {
        return view('perdidos.mascotas', ['perdidos' => Perdidos::all()]);
    }
}
