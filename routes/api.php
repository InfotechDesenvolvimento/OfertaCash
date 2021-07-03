<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('extrato/cliente', 'App\Http\Controllers\VendaController@extratoCliente');
Route::post('estados/', 'App\Http\Controllers\EstadoController@getEstados');
Route::post('cidades/', 'App\Http\Controllers\CidadeController@getCidades');
Route::post('ramos', 'App\Http\Controllers\RamoAtividadeController@getRamos');
Route::post('credenciadas/', 'App\Http\Controllers\CredenciamentoController@getCredenciadas');
Route::post('disputas/', 'App\Http\Controllers\DisputaController@getDisputas');
Route::post('situacoes_disputa/', 'App\Http\Controllers\SituacaoDisputaController@getSituacoesDisputa');
Route::post('cliente/', 'App\Http\Controllers\VendaController@getCliente');
Route::post('confirmar_cliente/', 'App\Http\Controllers\VendaController@confirmarCliente');
Route::post('registrar_venda/', 'App\Http\Controllers\VendaController@registrarVenda');
Route::post('consultar_venda/', 'App\Http\Controllers\VendaController@consultarVenda');
Route::post('finalizar_venda/', 'App\Http\Controllers\VendaController@finalizarVenda');
Route::post('listar_vendas/pendentes', 'App\Http\Controllers\VendaController@listarVendasPendentes');
Route::post('listar_vendas/finalizadas', 'App\Http\Controllers\VendaController@listarVendasFinalizadas');
Route::post('listar_vendas/canceladas', 'App\Http\Controllers\VendaController@listarVendasCanceladas');
Route::post('listar_vendas/recebidas', 'App\Http\Controllers\VendaController@listarVendasRecebidas');
Route::post('listar_estornos/aprovados', 'App\Http\Controllers\VendaController@listarEstornosAprovados');
Route::post('listar_estornos/recusados', 'App\Http\Controllers\VendaController@listarEstornosRecusados');