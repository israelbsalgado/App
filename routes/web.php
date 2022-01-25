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

use App\Http\Controllers\ClientController;

Route::get('/',[ClientController::class, 'index']);
Route::get('/contato/client',[ClientController::class, 'client']);

#Route::post('/contato', ClientController::class, 'store' )  ; }}

Route::get('/contatos', function(){
    return view('contatos');
});