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


// NOS CONECTAMOS A UN CONTROLADOR
// queremos que el '/' se conecte con 'index' por medio de PostControllers


Route::get('/', [App\Http\Controllers\PostController::class, 'index']);

