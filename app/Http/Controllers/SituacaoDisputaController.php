<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SituacaoDisputa;

class SituacaoDisputaController extends Controller
{
    public function getSituacoesDisputa() {
        $situacoes = SituacaoDisputa::all();
        return json_encode($situacoes);
    }
}