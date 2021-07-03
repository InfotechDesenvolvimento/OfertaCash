<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Disputa;
use Illuminate\Support\Facades\DB;

class DisputaController extends Controller
{
    public function getDisputas(Request $request) {
        $cod_cliente = $request->get('cod_cliente');
        $cod_status = $request->get('cod_status');
        $cod_lojista = $request->get('cod_lojista');
        $tipo = $request->get('tipo');

        $disputas = Disputa::select('controle_disputas.*')
                            ->leftJoin('situacao_disputas', 'situacao_disputas.CODIGO', '=', 'controle_disputas.COD_STATUS')
                            ->leftJoin('clientes', 'clientes.CODIGO', '=', 'controle_disputas.COD_LOJISTA')
                            ->leftJoin('venda_lojista', 'venda_lojista.CODIGO', '=', 'controle_disputas.COD_VENDA')
                            ->when($tipo == 1, function ($query) use ($cod_cliente) {
                                $query->where('controle_disputas.COD_CLIENTE', '=', $cod_cliente);
                            })->when($tipo != 1, function ($query) use ($cod_lojista) {
                                $query->where('controle_disputas.COD_LOJISTA', '=', $cod_lojista);
                            })->when($cod_status != 0, function ($query) use ($cod_status) {
                                $query->where('controle_disputas.COD_STATUS', '=', $cod_status);
                            })->get();

        return json_encode($disputas);
    }
}