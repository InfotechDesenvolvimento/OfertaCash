<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cidade;

class CidadeController extends Controller
{
    public function getCidades(Request $request) {

        $cidades = Cidade::where('COD_UF', $request->get('codUF'))->get();
        
        return json_encode($cidades);
    }
}
