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

/* Route::get('/', function () {
    return view('welcome');
});
 */
Route::get('contactanos', function () {
    return "Seccion de Contactos";
});

Route::get('/', function () {
    echo "<a href='/contactanos'>Contactos1</a><br>";
    echo "<a href='/contactanos'>Contactos2</a><br>";
    echo "<a href='/contactanos'>Contactos3</a><br>";
    echo "<a href='/contactanos'>Contactos4</a><br>";
    echo "<a href='/contactanos'>Contactos5</a><br>";
    
}); 