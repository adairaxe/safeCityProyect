<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/safeCity')->group(function(){
    Route::get('/inicio', function(){
        return view("inicio");
    });

    Route::get('/denuncia', function () {
        return 'denuncia';
    });
    
    Route::get('/mapa-de-calor', function () {
        return 'mapa de calor';
    });

    Route::get('/usuario/{userName}/perfil', function (string $userName) {
        return "Perfil de ".$userName;
    })->where('userName', '[A-Za-z]{1,7}')
        ->name('profile');
});
