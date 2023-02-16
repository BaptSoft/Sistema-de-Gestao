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

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contacto', 'ContactoController@contacto')->name('site.contacto');
//////////
Route::get('/login', function () {return 'login';})->name('site.login');


Route::prefix('/app')->group(function () {
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/clientes', function () {return 'clientes';})->name('app.clientes');
    Route::get('/produtos', function () { return 'produtos';})->name('produtos');
});
Route::fallback(function(){
echo 'A pagina Acessada não Existe. <a href="'.route('site.index').'"> Clica aqui </a> para ir a pagina inicial';
});
