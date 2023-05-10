<?php

use App\Http\Controllers\OrderanController;
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
    return view('home');
});


Route::post('/checkout' , [OrderanController::class , 'checkout']);

Route::get('/invoice/{id}' , [OrderanController::class , 'invoice']);

