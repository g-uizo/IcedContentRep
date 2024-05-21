<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\landingController::class, 'landingPage'])->name('site.landing');
Route::get('/pagina-Inicial',[\App\Http\Controllers\landingController::class,'redirect']);
Route::get('/home',[\App\Http\Controllers\landingController::class,'redirect']);
Route::get('/nosso-Produtos',[\App\Http\Controllers\productsController::class, 'productsPage'])->name('site.products');
Route::get('/produtos',[\App\Http\Controllers\productsController::class,'redirect']);