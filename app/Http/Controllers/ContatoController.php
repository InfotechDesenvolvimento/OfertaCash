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
	        $data["email-from"] = $email;
	        $data["mensagem"] = $mensagem;
	        $data["emailTo"] = "gabreezus@gmail.com";

    		Mail::send('email.layout', $data, function($message)use($data, $pdf) {
	            $message->to($data["emailTo"], $data["emailTo"])
	            		->from('projetos.conciflex@gmail.com')
	                    ->subject($data["title"]);
	        });
    	} catch (Exception $e) {
    		$dados->STATUS_ENVIADO = 0;
    		return view('contato')->with('message', $message);
    	}


    	$dados->save();

    	return view('contato')->with('message', $message);
    }
}