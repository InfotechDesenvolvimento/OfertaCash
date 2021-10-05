<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Mensagem;
use Mail;

class ContatoController extends Controller
{
    public function enviarMensagem(Request $request) {

    	$nome = $request->input('nome');
    	$email = $request->input('email');
    	$mensagem = $request->input('mensagem');

    	$message = "Mensagem enviada com sucesso!";

    	$dados = new Mensagem();

    	$dados->NOME = $nome;
    	$dados->EMAIL = $email;
    	$dados->MENSAGEM = $mensagem;

    	try {
    		$dados->STATUS_ENVIADO = 1;

			$data["title"] = "Nova mensagem!";
	        $data["nome"] = $nome;
	        $data["emailfrom"] = $email;
	        $data["mensagem"] = $mensagem;
	        $data["emailTo"] = "contato@ofertacash.com.br";
	        $data["data"] = date("d/m/Y");
	        $data["hora"] = date("H:i:s");

	        if($dados->NOME && $dados->EMAIL && $dados->MENSAGEM) {
	    		Mail::send('email.layout', $data, function($message)use($data) {
		            $message->to($data["emailTo"], $data["emailTo"])
		            		->from('contato@ofertacash.com.br')
		                    ->subject($data["title"]);
		        });
	    	}

	    	try {
	    		Mail::send('email.layout', $data, function($message)use($data) {
		            $message->to($data["emailfrom"], $data["emailfrom"])
		            		->from('contato@ofertacash.com.br')
		                    ->subject("Copia: " .$data["title"]."");
		        });
	    	} catch (Exception $e) {
	    		Log::info($e);
	    	}
    	} catch (Exception $e) {
    		$dados->STATUS_ENVIADO = 0;
    		return view('contato')->with('message', $message);
    	}

    	if($dados->NOME && $dados->EMAIL && $dados->MENSAGEM) {
    		$dados->save();
    	}

    	return view('contato')->with('message', $message);
    }
}