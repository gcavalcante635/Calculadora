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

//Route::get ('/soma', ['\App\Http\Controllers\CalculadoraController', 'soma']);

Route::get ('/soma', '\App\Http\Controllers\CalculadoraController@soma')->name('carregarSoma');
Route::get ('/subtracao', '\App\Http\Controllers\CalculadoraController@subtracao')->name('carregarSubtração');
Route::get ('/multiplicacao', '\App\Http\Controllers\CalculadoraController@multiplicacao')->name('carregarMultiplicação');
Route::get ('/divisao', '\App\Http\Controllers\CalculadoraController@divisao')->name('carregarDivisão');

Route::post ('/calcular-soma', 'App\Http\Controllers\CalculadoraController@calcularSoma')->name('somar');
Route::post ('/calcular-subtracao', 'App\Http\Controllers\CalculadoraController@calcularSubtracao')->name('subtrair');
Route::post ('/calcular-multiplicacao', 'App\Http\Controllers\CalculadoraController@calcularMultiplicacao')->name('multiplicar');
Route::post ('/calcular-divisao', 'App\Http\Controllers\CalculadoraController@calcularDivisao')->name('dividir');

Route::get ('/menu', '\App\Http\Controllers\CalculadoraController@menu')->name('menu');
// Route::get('rota', 'Controller@funcao');
