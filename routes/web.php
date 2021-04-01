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

Route::get('/', function () {
    return view('welcome');
});
Route::get ('/cadastrar', '\App\Http\Controllers\CadastroController@cadastro')->name('carregarCadastro');
Route::post ('/cadastro-carregar', '\App\Http\Controllers\CadastroController@formulario')->name('formulario');

Route::get ('/menu', '\App\Http\Controllers\CadastroController@menu')->name('carregarMenu');
Route::get ('/mostrarCadastro', '\App\Http\Controllers\CadastroController@mostrarCadastro')->name('cadastroCompleto');

Route::get ('/listusuario', '\App\Http\Controllers\CadastroController@listUsuario')->name('carregarlistusuario');

Route::get ('/usuario/editar/{id}', '\App\Http\Controllers\CadastroController@editarUsuario')->name('editarUsuario');
Route::post ('salvar_edicao', '\App\Http\Controllers\CadastroController@salvarEdicao')->name('salvarEdicao');
Route::get ('/usuario/excluir/{id}', '\App\Http\Controllers\CadastroController@excluirUsuario')->name('excluirUsuario');
