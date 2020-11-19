<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

//RUTAS API
    //Rutas de controlador de usuarios    
    Route::post('/api/usuario/registro',[UserController::class, 'registro']);
    Route::post('/api/usuario/login',[UserController::class, 'login']);
    Route::put('/api/usuario/update',[UserController::class, 'update']);