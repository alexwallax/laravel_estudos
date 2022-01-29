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

/* ultilizando função de calback
Route::get('/', function () {
    return 'Pagína princiapl';
});
*/

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');
// vai conter em contato - nome, categoria, assunto, mensagem

Route::get(
    '/contato/{nome}/{y}/{assunto}/{mensagem}', 
    function(string $nome, string $categoria, string $assunto, string $mensagem) {
    echo "Estamos aqui: .$nome - $categoria - $assunto - $mensagem";
});