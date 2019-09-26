<?php
use Illuminate\Http\Request;
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

Route::get('/', 'AlunoController@index')->name('login');

Route::get('/cadastro','AlunoController@createAluno')->name('cadastro');
Route::post('/cadastro','AlunoController@storeAluno')->name('cadastro');


Route::get('/cadastro-servidor', function(){
    return view('autenticacao.cadastro-servidor');
})->name('cadastro_servidor');

Route::get('/nome-documento', function(){
    return view('autenticacao.nome-documento');
})->name('nome_documento');

Route::get('/home-servidor',function(){
    return view('telas_servidor.home_servidor');
})->name('home_servidor');

Route::get('/listar-instituicao', function(){
    return view('autenticacao.listar-instituicao');
})->name('listar_instituicao');

Route::get('/listar-requisicoes','listarRequisicoesController@index')->name('listar-requisicoes');

Route::get('/listar-requisicoes',function(Request $request){
    return view('telas_servidor.requisicoes_servidor', ['titulo' => $request->titulo]);
})->name('listar-requisicoes');

Route::get('/listar-requisicoes','RequisicaoController@getRequisicoes')->name('listar-requisicoes');

Route::get('/home-aluno',function(){
    return view('autenticacao.home-aluno');
})->name('home-aluno');



//Formulário de requisicao
Route::get('/formulario-requisicao','RequisicaoController@index')->name('formulario-requisicao');
Route::post('/formulario-requisicao','RequisicaoController@storeRequisicao')->name('formulario-requisicao-post');

Route::get('/confirmacao-requisicao',function(){
    return view('autenticacao.confirmacao-requisicao');
})->name('confirmacao-requisicao');

Route::get('/confirmacao-requisicao',function(){
    return view('autenticacao.home-aluno');
})->name('confirmacao-requisicao');

 Route::get('/home-aluno', function(){
     return view('autenticacao.formulario-requisicao');
 })->name('formulario-requisicao');

 Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');
