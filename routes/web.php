<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;

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

Route::get('/', [EventsController::class, 'index']);
Route::post('/enviar', [EventsController::class, 'form_cadastro']);
Route::get('/cadastrar', [EventsController::class, 'pagina_cadastro']);


