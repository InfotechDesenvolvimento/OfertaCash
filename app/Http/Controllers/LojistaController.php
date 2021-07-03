<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cliente;
use App\Models\Cidade;
use App\Models\Estado;

class LojistaController extends Controller
{
    public function __construct(){
        $this->middleware('auth:lojista');
    }

    public function home() {
        return view('lojista.home');
    }

    public function credenciadas() {
        $estado = Estado::where('codigo', Auth::user()->cod_uf)->first();
        $cidade = Cidade::where('codigo', Auth::user()->cod_cidade)->first();

        return view('lojista.credenciadas', compact('estado', 'cidade'));
    }

    public function disputas() {
        return view('lojista.disputas');
    }

    public function vendasPendentes() {
        return view('lojista.vendas_pendentes');
    }

    public function vendasFinalizadas() {
        return view('lojista.vendas_finalizadas');
    }

    public function vendasCanceladas() {
        return view('lojista.vendas_canceladas');
    }

    public function vendasRecebidas() {
        return view('lojista.vendas_recebidas');
    }

    public function estornosAprovados() {
        return view('lojista.estorno_aprovados');
    }

    public function estornosRecusados() {
        return view('lojista.estorno_recusados');
    }
}
