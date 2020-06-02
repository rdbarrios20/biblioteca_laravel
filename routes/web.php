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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bitacora','BitacoraC@BitacoraView')->name('bitacora');
Route::get('/inventario','LibrosC@LibrosView')->name('inventario');
Route::get('/login','loginC@loginView');
Route::post('/login-validate','loginC@loginValidate');
Route::get('/inicio','InicioController@InicioView');
