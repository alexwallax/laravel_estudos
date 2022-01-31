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

//metodo ->name('') nomeia as rotas
Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function(){ return 'Login'; })->name('site.login');

/*agrupando rotas*/ 
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){ return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', function(){ return 'Fornecedores'; })->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos'; })->name('app.produtos');
});

// redirecionando rotas - quando entrar na rota2 vai ser redirecionado para rota1
Route::get('/rota1', function() {
    echo 'Rota 1';
})->name('site.rota1');

// primeira forma de redirecionamento de rotas
Route::get('/rota2', function() {
    return redirect()->route('site.rota1');
})->name('site.rota2');

/* segunda forma de redirecionamento de rotas
Route::redirect('/rota2', 'rota1');
*/

// rota de fallback (contigência) - se o usuário digitar uma rota que não existe, direciona para uma rota especifica 
Route::fallback(function() {
    echo 'A rota acessada não existe <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
});




/* Rota teste
Route::get(
    '/contato/{nome}/{categoria_id}', 
    function(
        string $nome = 'Desconhecido', 
        int $categoria_id = 1 // 1 - 'Informação'
    ) {
    echo "Estamos aqui: $nome - $categoria_id";
    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');//o 1º where testa se são númedos e que tenha pelo menos um, e o 2º teste se tem letras de a até z maiusculos e minusculos e que tenha pelo menos uma letra
*/