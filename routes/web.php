<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* per aggiungere la cartella necessaria per il controller
   usare " php artisan make:controller Cartella/NomeController "
   per convenzione si usa spesso "php artisan make:controller Guest/PageController"
   anche se il nome della cartella e del file sono na scelta nostra

   NB:la chiamata va fatta in un terminale diverso da quello del backend e frontend
*/

Route::get('/', function () {

    return view('home');
})->name("home");
