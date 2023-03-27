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
    $alunno = "Francesco Rocca";
    return view('home', compact ("alunno"));
});

Route::get('hello-link', function () {
    $alunno = "Francesco Rocca";
    return view('hello-link');
})->name("hello");