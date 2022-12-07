<?php

use App\Http\Controllers\LoginController;
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

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/autenticacao', [LoginController::class, 'auth'])->name('login.auth');

Route::middleware(['admin'])->group(function () {
    // rotas de acesso do admin
    Route::get('/admin', function(){
        dd('vc é um admin');
    });
});

Route::middleware(['client'])->group(function () {
    // rotas de acesso do cliente
    Route::get('/client', function(){
        dd('vc é um cliente');
    });
});