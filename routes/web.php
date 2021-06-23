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

Route::get('/saludo', function () {
    return 'Hola Mundo Laravel';
});

Route::get('/suma', function () {
    return view('practica2');
});
Route::get('/calculadora', function () {
    return view('calculadora');
});

Route::get('/contacto', function () {
    return view('formulario');
});

//Rutas

Route::get('/sumar','App\Http\Controllers\ControladorCalculadora@sumar')->name('sumar');

Route::get('/mostrar','App\Http\Controllers\ControladorWorld@mostrar')->name('mostrar');

Route::get('/ver','App\Http\Controllers\ControladorWorld@ver');

Route::get('/pdf','App\Http\Controllers\ControladorWorld@download')->name('pdf');

Route::get('/excel','App\Http\Controllers\ControladorWorld@export')->name('excel');

Route::get('/word','App\Http\Controllers\ControladorWorld@store')->name('word');

Route::get('/email','App\Http\Controllers\ControladorEmail@enviar')->name('email'); //correo

Route::post('/email2','App\Http\Controllers\ControladorEmail@enviar')->name('email2');


//examenpractico1country

Route::get('/mostrarcountry', 'App\Http\Controllers\ControladorCountry@mostrarcountry')->name('mostrarcountry');
Route::get('/vercountry', 'App\Http\Controllers\ControladorCountry@vercountry');
Route::get('/excelcountry', 'App\Http\Controllers\ControladorCountry@export')->name('excelcountry');


//subir archivo

Route::get('/subir', function () {return view('subir_archivo');})->name('subir');
Route::POST('/upload', 'App\Http\Controllers\ControladorArchivo@upload')->name('upload');//ejecuta el metodo upload del ArchivoController
Route::get('/mostrar_country','App\Http\Controllers\ControladorWorld@mostrar_country')->name('mostrar_country');Route::get('/subir', function () {return view('subir_archivo');})->name('subir');
Route::POST('/upload', 'App\Http\Controllers\ControladorArchivo@upload')->name('upload');//ejecuta el metodo upload del ArchivoController
Route::get('/mostrar_country','App\Http\Controllers\ControladorWorld@mostrar_country')->name('mostrar_country');


//carrito de compras

Route::get('/carrito', 'App\Http\Controllers\ControladorCarrito@productos' );
Route::post('/cart-add', 'App\Http\Controllers\ControladorCart@add')->name('cart.add');
Route::get('/cart-checkout','App\Http\Controllers\ControladorCart@cart')->name('cart.checkout');
Route::post('/cart-clear', 'App\Http\Controllers\ControladorCart@clear')->name('cart.clear');
Route::post('/cart-removeitem', 'App\Http\Controllers\ControladorCart@removeitem')->name('cart.removeitem');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
