<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cliente;
use App\Models\Cidade;
use App\Models\Estado;
use App\Models\VendaLojista;

class ClienteController extends Controller
{
    public function __construct(){
        $this->middleware('auth:cliente');
    }

    public function home() {
        return view('cliente.home');
    }

    public function credenciadas() {
        $estado = Estado::where('codigo', Auth::user()->cod_uf)->first();
        $cidade = Cidade::where('codigo', Auth::user()->cod_cidade)->first();

        return view('cliente.credenciadas', compact('estado', 'cidade'));
    }

    public function pagamentosPendentes() {
        $codigo = Auth::user()->getAuthIdentifier();
        $vendas = VendaLojista::where('COD_CLIENTE', $codigo)->where('CONFIRMADO', '!=', 'S')->whereNull('CANCELADA')->orderBy('DATA_VENDA');
        return view('cliente.pagamentos', compact('vendas'));
    }

    public function disputas() {

        return view('cliente.disputas');
    }

    public function extratos() {
        return view('cliente.extrato');    
    }
}
