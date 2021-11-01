<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\EstadoCivil;
use App\Models\Cidade;
use App\Models\Estado;
use App\Models\CredenciamentoCliente;

class CreditoController extends Controller
{
    public function index(){
        $estados_civis = EstadoCivil::all();
        $cidades = Cidade::all();
        $estados = Estado::all();

        return view('credito', compact('cidades', 'estados_civis', 'estados'));
    }

    public function cadastrarPessoaJuridica(Request $request) {
        $cadastro = $request->all();

        $credenciamento = new CredenciamentoCliente();

        $credenciamento->NOME = $cadastro['nome'];
        $credenciamento->CPF = $cadastro['cpf'];
        $credenciamento->DATA_NASCIMENTO = $cadastro['data-nascimento'];
        $credenciamento->ESTADO_CIVIL = $cadastro['estado-civil'];
        $credenciamento->CIDADE = $cadastro['cidade'];
        $credenciamento->UF = $cadastro['uf'];
        $credenciamento->BAIRRO = $cadastro['bairro'];
        $credenciamento->ENDERECO = $cadastro['endereco'];
        $credenciamento->CEP = $cadastro['cep'];
        $credenciamento->DDD = $cadastro['ddd'];
        $credenciamento->CELULAR = $cadastro['celular'];
        $credenciamento->EMAIL = $cadastro['email'];
        $credenciamento->CODIGO_PROMOCIONAL = $cadastro['codigo'];

        $estados_civis = EstadoCivil::all();
        $cidades = Cidade::all();
        $estados = Estado::all();

        if($credenciamento->save()) {
            return view('cash-carteira', 
                ['success' => 'Cadastro realizado com sucesso.'],
                compact('cidades', 'estados_civis', 'estados'));
        } else {
            return view('cash-carteira', 
                ['error' => 'Não foi possível enviar sua solicitação.'],
                compact('cidades', 'estados_civis', 'estados'));
        }
    }
}
