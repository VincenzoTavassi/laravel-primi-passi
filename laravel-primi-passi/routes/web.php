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
    $world = "Hello World";
    $helloArray = ["venduì", "hello", "bonjour", "hola"];
    return view('home', compact('world', 'helloArray'));
})->name('homepage');

Route::get('/first', function () {
    return view('first-page');
})->name('prima-pagina');

Route::get('/second', function () {
    return view('second-page');
})->name('seconda-pagina');
