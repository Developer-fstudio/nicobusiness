<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController as MessageController;

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
    return view('auth.login');
});

Route::resource('articulos','App\Http\Controllers\ArticuloController');
Route::resource('clients','App\Http\Controllers\ClientController');
Route::resource('empresa','App\Http\Controllers\EmpresaController');
Route::resource('messages','App\Http\Controllers\MessageController');
Route::resource('aniversarios','App\Http\Controllers\AniversariosController');
Route::get('sendMessage/{message}', 'App\Http\Controllers\MessageController@SendMessage');
Route::get('sendMessageTwilio/{message}', 'App\Http\Controllers\MessageController@SendMessageTwilio');
Route::get('sendMessageExpress/{message}', 'App\Http\Controllers\MessageController@SendMessageExpress');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
