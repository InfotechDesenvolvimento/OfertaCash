<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Estado;

class EstadoController extends Controller
{
    public function getEstados(Request $request) {
        $estados = Estado::all();

        return json_encode($estados);
    }
}
