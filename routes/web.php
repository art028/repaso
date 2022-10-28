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


Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/','App\Http\Controllers\controlador@inicio');
Route::get('1','App\Http\Controllers\controlador@form');
Route::get('2','App\Http\Controllers\controlador@table');

Route::post('guardar','App\Http\Controllers\controlador@guarda');