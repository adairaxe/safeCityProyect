<?php

use Illuminate\Support\Facades\Route;
use App\Cities\City;

use App\Http\Controllers\ClientController;

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

Route::prefix('/safeCity')->group(function () {
    Route::get('/inicio', function () {
        return view("inicio");
    });

    Route::get('/denuncia', function () {
        return 'denuncia';
    });

    Route::get('/mapa-de-calor/{city}', function (City $city) {
        return 'mapa de calor: ' . $city->value;
    });

    Route::get('/usuario/{userName}/perfil', function (string $userName) {
        return "Perfil de " . $userName;
    })->where('userName', '[A-Za-z]{1,7}')
        ->name('profile');

    Route::get('/allClients', [ClientController::class, 'index']);
});
