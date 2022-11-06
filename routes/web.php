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

Route::get('/contacto', function () {
    return view('paginas/contacto');
});

Route::get('/actualizaciones', function () {
    $versionUno = 'Versión 1.0';
    $versionDos = 'Versión 2.0';
    return view('paginas.historico-actualizaciones', compact('versionUno', 'versionDos'));
        // ->with([
        //     'versionUno' => $versionUno,
        //     'versionDos' => $versionDos
        // ]);
});
