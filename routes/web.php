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
})->name('home');

Route::resource('/students', 'StudentController'); //crea tutte le rotte in automatico e le nomina già
//get product => la index
//create ci restituisce il form per creare un nuovo studente
//che viene salvato tramite la funzione store
//show mostra i dettagli
//delete cancella
//edit + get restituisce il form per modificare i dati
//put prende i dati dal form e li salva
//solo le prime 3 sono navigabili (get). tutte le cose che navighi con il metodo get sono view
