<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\landingController::class, 'landingPage'])->name('site.landing');
Route::get('/pagina-Inicial',[\App\Http\Controllers\landingController::class,'redirect']);
//Route::get('/home',[\App\Http\Controllers\landingController::class,'redirect']);

Route::group(['prefix'=> 'produtos'], function () {Route::get('/',[\App\Http\Controllers\productsController::class, 'productsPage'])->name('site.products');
    Route::get('/criar',[\App\Http\Controllers\productsController::class, 'formProductsPage'])->name('site.formProducts');
    Route::get('/editar/{id}',[\App\Http\Controllers\productsController::class, 'editFormProductsPage'])->name('site.editFormProducts');
    Route::post('/',[\App\Http\Controllers\productsController::class, 'postProducts'])->name('site.postProducts');
    Route::delete('/{id}',[\App\Http\Controllers\productsController::class, 'deleteProducts'])->name('site.deleteProducts'); 
    Route::put('/{id}',[\App\Http\Controllers\productsController::class, 'editProducts'])->name('site.editProducts'); });

Route::get('/sobreNos',[\App\Http\Controllers\sobreController::class, 'sobrePage'])->name('site.sobre');
Route::get('/sobre',[\App\Http\Controllers\sobreController::class,'redirect']);

Route::get('/contato',[\App\Http\Controllers\contatoController::class, 'contatoPage'])->name('site.contato');
Route::get('/Contato',[\App\Http\Controllers\contatoController::class,'redirect']);

Route::get('/sacola',[\App\Http\Controllers\bagController::class,'bagPage'])->name('site.sacola');

//Route::get('/login',[\App\Http\Controllers\Auth\LoginController::class,''])->middleware('auth');

Route::fallback([\App\Http\Controllers\fallbackController::class, 'fallback']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');
