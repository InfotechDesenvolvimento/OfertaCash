<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RamoAtividade;
use App\Models\Banco;
use App\Models\Credenciamento;
use App\Models\CredenciamentoCliente;
use App\Models\Cidade;
use App\Models\Estado;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;

class CredenciamentoController extends Controller
{
    public function index(){
        $ramos = RamoAtividade::all();
        $bancos = Banco::all();
        return view('seja_credenciado', compact('bancos', 'ramos'));
    }

    public function landing() {
        return view('credenciamento');
    }

    public function getCredenciadas(Request $request) {
        $codEstado = $request->get('codUF');
        $codCidade = $request->get('codCidade');
        $ramo = $request->get('ramo');

        $credenciadas = Cliente::select('clientes.*')
                        ->leftJoin('cidades', 'cidades.codigo', '=', 'clientes.codigo')
                        ->leftJoin('ramo_atividade', 'ramo_atividade.CODIGO', '=', 'clientes.COD_RAMO_ATIVIDADE')
                        ->when($request->get('codCidade') != null, function ($query) use ($codCidade){
                            $query->where('cod_cidade', '=', $codCidade);
                        })->when($ramo != 0, function ($query) use ($ramo) {
                            $query->where('cod_ramo_atividade', '=', $ramo);
                        })->where('clientes.cod_uf', $codEstado)
                        ->where('clientes.COD_TIPO_CLIENTE', 2)
                        ->with('cidade')->with('ramo_atividade')->get();
    
        return json_encode($credenciadas);
    }

    public function enviarCredenciamentoLanding(Request $request) {

        $credenciamento = $request->all();
        $credenciamento['nome_responsavel'] = strtoupper($credenciamento['nome_responsavel']);

        $cred = new Credenciamento();
        $cred->NOME = $credenciamento['nome_responsavel'];
        $cred->CNPJ = $credenciamento['cnpj'];
        $cred->DDD = $credenciamento['ddd'];
        $cred->CELULAR = $credenciamento['celular'];
        $cred->EMAIL = $credenciamento['email'];
        $cred->COD_STATUS = 1;
        $cred->DATA_SOLICITACAO = date('Y-m-d');

        if($cred->save()) {
            return view('credenciamento', ['success' => 'Cadastro realizado com sucesso.']);
        } else {
            return view('credenciamento', ['error' => 'Não foi possível enviar sua solicitação.']);
        }

    }

    public function enviarCredenciamento(Request $request) {
        $credenciamento = $request->all();

        $credenciamento['nome_responsavel'] = strtoupper($credenciamento['nome_responsavel']);
        $credenciamento['razao_social'] = strtoupper($credenciamento['razao_social']);
        $credenciamento['nome_fantasia'] = strtoupper($credenciamento['nome_fantasia']);
        $credenciamento['cidade'] = strtoupper($credenciamento['cidade']);
        $credenciamento['endereco'] = strtoupper($credenciamento['endereco']);
        $credenciamento['bairro'] = strtoupper($credenciamento['bairro']);
        $credenciamento['email'] = strtoupper($credenciamento['email']);
        $credenciamento['ramo_atividade'] = strtoupper($credenciamento['ramo_atividade']);

        if($credenciamento["codigo"] != "") {
            $cred = Credenciamento::find($credenciamento["codigo"]);
        } else {
            $cred = new Credenciamento();
        }

        $cred->NOME = $credenciamento['nome_responsavel'];
        $cred->RAZAO_SOCIAL = $credenciamento['razao_social'];
        $cred->NOME_FANTASIA = $credenciamento['nome_fantasia'];
        $cred->AGENCIA = $credenciamento['agencia'];
        $cred->CONTA = $credenciamento['conta'];
        $cred->PERCENTUAL_PAY_BACK = $credenciamento['percentual'];
        $cred->CNPJ = $credenciamento['cnpj'];
        $cred->ENDERECO = $credenciamento['endereco'];
        $cred->UF = $credenciamento['estado'];
        $cred->CIDADE = $credenciamento['cidade'];
        $cred->BAIRRO = $credenciamento['bairro'];
        $cred->CEP = $credenciamento['cep'];
        $cred->DDD = $credenciamento['ddd'];
        $cred->CELULAR = $credenciamento['celular'];
        $cred->FONE = $credenciamento['telefone'];
        $cred->EMAIL = $credenciamento['email'];
        $cred->RAMO_ATIVIDADE = $credenciamento['ramo_atividade'];
        $cred->BANCO = $credenciamento['banco'];
        $file = $request->file('logomarca');
        $contents = $file->openFile()->fread($file->getSize());
        $cred->LOGO = $contents;
        $cred->COD_STATUS = 1;
        $cred->DATA_SOLICITACAO = date('Y-m-d');

        $ramos = RamoAtividade::all();
        $bancos = Banco::all();

        if($cred->save()) {
            $msg = 'Credenciamento efetuado!';
            return view('landing_seja_credenciado', compact('msg'));
        } else {
            $msg = 'Credenciamento falhou!';
            return view('landing_seja_credenciado', compact('msg'));
        }
    }

    public function enviarCredenciamentoCliente(Request $request) {
        $credenciamento = $request->all();

        $credenciamento['nome'] = strtoupper($credenciamento['nome']);
        $credenciamento['cidade'] = strtoupper($credenciamento['cidade']);
        $credenciamento['endereco'] = strtoupper($credenciamento['endereco']);
        $credenciamento['bairro'] = strtoupper($credenciamento['bairro']);
        $credenciamento['email'] = strtoupper($credenciamento['email']);

        $cred = new CredenciamentoCliente();

        $cred->NOME = $credenciamento['nome'];
        $cred->CPF = $credenciamento['cpf'];
        $data = str_replace("/", "-", $credenciamento['nascimento']);
        $cred->DATA_NASCIMENTO = date('Y-m-d', strtotime($data));
        $cred->ENDERECO = $credenciamento['endereco'];
        $cred->UF = $credenciamento['estado'];
        $cred->CIDADE = $credenciamento['cidade'];
        $cred->BAIRRO = $credenciamento['bairro'];
        $cred->CEP = $credenciamento['cep'];
        $cred->DDD = $credenciamento['ddd'];
        $cred->CELULAR = $credenciamento['celular'];
        $cred->EMAIL = $credenciamento['email'];
        $cred->ESTADO_CIVIL = $credenciamento['estado_civil'];
        $cred->EMPREGADOR = $credenciamento['empresa'];
        $cred->COD_STATUS = 1;
        $cred->DATA_SOLICITACAO = date('Y-m-d');
        if($credenciamento['promocional'] != null) {
            $cred->CODIGO_PROMOCIONAL = $credenciamento['promocional'];
        }
        if($credenciamento['cartao'] != null) {
            $cred->CARTAO = $credenciamento['cartao'];
        }

        if($cred->save()) {
            $msg = 'Credenciamento efetuado!';
            return view('minha_conta', compact('msg'));
        } else {
            $msg = 'Credenciamento falhou!';
            return view('minha_conta', compact('msg'));
        }
    }
}
