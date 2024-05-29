<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\landingController::class, 'landingPage'])->name('site.landing');
Route::get('/pagina-Inicial',[\App\Http\Controllers\landingController::class,'redirect']);
Route::get('/home',[\App\Http\Controllers\landingController::class,'redirect']);
Route::get('/nosso-Produtos',[\App\Http\Controllers\productsController::class, 'productsPage'])->name('site.products');
Route::post('nosso-Produtos',[\App\Http\Controllers\productsController::class, 'postProducts'])->name('site.products');
Route::get('/produtos',[\App\Http\Controllers\productsController::class,'redirect']);
Route::get('/sobreNos',[\App\Http\Controllers\sobreController::class, 'sobrePage'])->name('site.sobre');
Route::get('/sobre',[\App\Http\Controllers\sobreController::class,'redirect']);
Route::get('/contato',[\App\Http\Controllers\contatoController::class, 'contatoPage'])->name('site.contato');
Route::get('/Contato',[\App\Http\Controllers\contatoController::class,'redirect']);