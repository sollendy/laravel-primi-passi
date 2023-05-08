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
    $eroi = [
        "Kaidan Alenko;",
        "Tali'Zorah nar Rayya;",
        "Garrus Vakarian;",
        "Urdnot Wrex;",
        "Liara T'Soni;",
        "Miranda Lawson;",
        "Jacob Taylor;",
        "Jack;",
        "Samara;",
        "Zaeed Massani;",
        "Urdnot Grunt;",
        "Mordin Solus;",
        "Thane Krios;",
        "Legion;",
        "James Vega;",
        "Javik.",
    ];
    return view('paginona', compact('eroi'));
});
