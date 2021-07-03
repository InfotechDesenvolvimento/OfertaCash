<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\VendaLojista;
use App\Models\PagamentoLojista;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VendaController extends Controller
{
    public function getCliente(Request $request) {
        if($request->get('cpf') != '') {
            $cliente = Cliente::where('cpf_cnpj', '=', $request->get('cpf'))->first();
        } else if($request->get('codigo') != '') {
            $cliente = Cliente::where('codigo', '=', $request->get('codigo'))->first();
        }

        return json_encode($cliente);
    }

    public function confirmarCliente(Request $request) {
        $cliente = Cliente::find($request->input('codigo'));

        if($cliente->SENHA == $request->input('senha_usuario')) {
            return json_encode(true);
        } else {
            return json_encode(false);
        }
    }

    public function registrarVenda(Request $request) {
        $venda = new VendaLojista();

        date_default_timezone_set("America/Sao_Paulo");

        $venda->DATA_VENDA = date("Y-m-d");
        $venda->HORA_VENDA = now();
        $venda->COD_LOJISTA = $request->input('codLojista');
        $venda->COD_CLIENTE = $request->input('codCliente');
        $venda->CPF_CLIENTE = $request->input('cpfCliente');
        $venda->VALOR_TOTAL = $request->input('valorTotal');
        $venda->SALDO_ANTERIOR = $request->input('saldoAnterior');
        $saldoPosterior = $venda->SALDO_ANTERIOR - $venda->VALOR_TOTAL;
        $venda->SALDO_POSTERIOR = $saldoPosterior;
        $venda->FINALIZADA = 'N';
        $venda->CONFIRMADO = 'S';
        if($request->input('numParcelas') != "") {
            $venda->NUM_PARCELAS = $request->input('numParcelas');
        } else {
            $venda->NUM_PARCELAS = '0';
        }
        $venda->ALIMENTICIO = $request->input('ramoAlimento');
        $venda->NOME_LOJISTA = $request->input('nomeLojista');

        if($venda->save()) {
            return json_encode($venda);
        } else {
            return null;
        }
        
    }

    public function consultarVenda(Request $request) {
        $venda = VendaLojista::find($request->input("codigo"));
        return json_encode($venda);
    }

    public function finalizarVenda(Request $request) {
        $venda = VendaLojista::find($request->input("codigo"));
        date_default_timezone_set("America/Sao_Paulo");

        $venda->CONFIRMACAO = $request->input("confirmacao");
        $venda->FINALIZADA = 'S';
        $venda->DATA_FINALIZADA = date("Y-m-d");
        $venda->HORA_FINALIZADA = now();
        $venda->FINALIZADA_LOJISTA = 'S';
        $venda->DATA_FIN_LOJ = date("Y-m-d");
        $venda->HORA_FIN_LOJ = now();
        $venda->PLATAFORMA_VENDA = 'SITE';
        if($venda->save()) {
            return true;
        }
        return false;
    }

    public function listarVendasPendentes(Request $request) {
        $cod_lojista = $request->input("cod_lojista");
        $vendas = VendaLojista::where('CONFIRMADO', 'N')->where('COD_LOJISTA', $cod_lojista)->with('cliente')->get();
        return $vendas;
    }

    public function listarVendasFinalizadas(Request $request) {
        $cod_lojista = $request->input("cod_lojista");
        $vendas = VendaLojista::where('FINALIZADA', 'S')->where('COD_LOJISTA', $cod_lojista)->with('cliente')->get();
        return $vendas;
    }

    public function listarVendasCanceladas(Request $request) {
        $cod_lojista = $request->input("cod_lojista");
        $vendas = VendaLojista::where('CANCELADA', 'S')->where('COD_LOJISTA', $cod_lojista)->with('cliente')->get();
        return $vendas;
    }

    public function listarVendasRecebidas(Request $request) {
        $cod_lojista = $request->input("cod_lojista");
        $vendas = DB::table('pagamento_lojistas')->select('venda_lojista.*', 'pagamento_lojistas.*', 'clientes.NOME as CLIENTE', 'situacao_contas.*')
        ->leftJoin('venda_lojista as venda_lojista', 'venda_lojista.CODIGO', '=', 'pagamento_lojistas.COD_VENDA')
        ->leftJoin('clientes as clientes', 'venda_lojista.COD_CLIENTE', '=', 'clientes.CODIGO')
        ->leftJoin('situacao_contas as situacao_contas', 'situacao_contas.codigo', '=', 'pagamento_lojistas.COD_STATUS')
        ->where('pagamento_lojistas.COD_LOJISTA', $cod_lojista)
        ->where(function($query) {
            $query->where('pagamento_lojistas.COD_STATUS', 3)
                  ->orWhere('pagamento_lojistas.COD_STATUS', 7);
        })->when($request->input('inicio_periodo') != "", function($query) use ($request){
            $query->where('DATA_ESTORNO', '>=', $request->get('inicio_periodo'));
        })->when($request->input('fim_periodo') != "", function($query) use ($request){
            $query->where('DATA_ESTORNO', '<=', $request->get('fim_periodo'));
        })->get();
        return $vendas;
    }

    public function listarEstornosAprovados(Request $request) {
        $cod_lojista = $request->input("cod_lojista");
        $estornos = DB::table('historico_estorno')->select('historico_estorno.*', 'clientes.cpf_cnpj')
        ->leftJoin('clientes as clientes', 'clientes.CODIGO', '=', 'historico_estorno.COD_CLIENTE')
        ->where('historico_estorno.cod_lojista', $cod_lojista)
        ->when($request->input('inicio_periodo') != "", function($query) use ($request){
            $query->where('DATA_ESTORNO', '>=', $request->get('inicio_periodo'));
        })->when($request->input('fim_periodo') != "", function($query) use ($request){
            $query->where('DATA_ESTORNO', '<=', $request->get('fim_periodo'));
        })->get();
        return $estornos;
    }

    public function listarEstornosRecusados(Request $request) {
        $cod_lojista = $request->input("cod_lojista");
        $estornos = VendaLojista::where('COD_LOJISTA', $cod_lojista)->where('ESTORNO', 'N')
                            ->when($request->input('inicio_periodo') != "", function($query) use ($request) {
                                $query->where('DATA_VENDA', '>=', $request->input('inicio_periodo'));
                            })->when($request->input('fim_periodo') != "", function($query) use ($request) {
                                $query->where('DATA_VENDA', '<=', $request->input('fim_periodo'));
                            })->get();
        return $estornos;
    }

    public function extratoCliente(Request $request) {
        $cod_cliente = $request->input("cod_cliente");
        //$data_inicial = $request->input("data_inicial");
        //$data_final = $request->input("data_final");

        $extratos = VendaLojista::where("COD_CLIENTE", $cod_cliente)->where("TRATADO", 'S')
                    ->where(function($query) {
                        $query->whereNull('ESTORNO')
                            ->orWhere('ESTORNO', 'N');
                    })->when($request->input('data_inicial') != "", function($query) {
                        $query->where('DATA_VENDA', '<=', $data_final);
                    })->when($request->input('data_final') != "", function($query) {
                        $query->where('DATA_VENDA', '>=', $data_inicial);
                    })->with('cliente')->get();


        return json_encode($extratos);
    }
}