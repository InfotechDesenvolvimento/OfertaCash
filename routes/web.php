<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/quem_somos', function() {
    return view('quem_somos');
})->name('quem_somos');

Route::get('/contato', function() {
    return view('contato');
})->name('contato');

Route::get('/credito', function() {
    return view('credito');
})->name('credito');


Route::get('/credenciamento', 'App\Http\Controllers\CredenciamentoController@landing')->name('credenciamento');

Route::get('/cash-carteira', 'App\Http\Controllers\CashCarteiraController@index')->name('cash-carteira');
Route::post('/cash-carteira/cadastro', 'App\Http\Controllers\CashCarteiraController@cadastrarPessoaFisica')->name('cash.cadastro');


Route::get('/seja_credenciado', 'App\Http\Controllers\CredenciamentoController@index')->name('seja_credenciado');

Route::post('enviar/credenciamento', 'App\Http\Controllers\CredenciamentoController@enviarCredenciamento')
        ->name('enviar.credenciamento');

Route::post('enviar/credenciamento_landing', 'App\Http\Controllers\CredenciamentoController@enviarCredenciamentoLanding')
        ->name('enviar.credenciamento_landing');
                

Route::post('enviar/credenciamento_cliente', 'App\Http\Controllers\CredenciamentoController@enviarCredenciamentoCliente')
        ->name('enviar.credenciamento_cliente');

Route::get('/cliente/home', 'App\Http\Controllers\ClienteController@home')
        ->name('cliente.home');
Route::get('/cliente/credenciadas', 'App\Http\Controllers\ClienteController@credenciadas')
        ->name('cliente.credenciadas');
Route::get('/cliente/pagamentos_pendentes', 'App\Http\Controllers\ClienteController@pagamentosPendentes')
        ->name('cliente.pagamentos_pendentes');
Route::get('/cliente/extratos', 'App\Http\Controllers\ClienteController@extratos')
        ->name('cliente.extratos');
Route::get('/cliente/disputas', 'App\Http\Controllers\ClienteController@disputas')
        ->name('cliente.disputas');

Route::get('/lojista/home', 'App\Http\Controllers\LojistaController@home')
        ->name('lojista.home');
Route::get('/lojista/credenciadas', 'App\Http\Controllers\LojistaController@credenciadas')
        ->name('lojista.credenciadas');
Route::get('/lojista/disputas', 'App\Http\Controllers\LojistaController@disputas')
        ->name('lojista.disputas');
Route::get('/lojista/vendas_pendentes', 'App\Http\Controllers\LojistaController@vendasPendentes')
        ->name('lojista.vendas_pendentes');
Route::get('/lojista/vendas_finalizadas', 'App\Http\Controllers\LojistaController@vendasFinalizadas')
        ->name('lojista.vendas_finalizadas');
Route::get('/lojista/vendas_canceladas', 'App\Http\Controllers\LojistaController@vendasCanceladas')
        ->name('lojista.vendas_canceladas');
Route::get('/lojista/vendas_recebidas', 'App\Http\Controllers\LojistaController@vendasRecebidas')
        ->name('lojista.vendas_recebidas');
Route::get('/lojista/estornos_aprovados', 'App\Http\Controllers\LojistaController@estornosRecusados')
        ->name('lojista.estornos_recusados');
Route::get('/lojista/estornos_recusados', 'App\Http\Controllers\LojistaController@estornosAprovados')
        ->name('lojista.estornos_aprovados');

Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
//Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');

Route::post('/contato/mensagem', 'App\Http\Controllers\ContatoController@enviarMensagem')->name('contato.mensagem');


Route::get('enviar/credenciamento_landing', 'App\Http\Controllers\CredenciamentoController@errorPage');
Route::get('/contato/mensagem', 'App\Http\Controllers\CredenciamentoController@errorPage');
