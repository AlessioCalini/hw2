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

Route::get("/login", "LoginController@login")->name("login");
Route::post("/login", "LoginController@checkLogin");
Route::get("/logout", "LoginController@logout")->name("logout");

Route::get("/register", "RegisterController@index")->name('register');
Route::post("/register","RegisterController@create");
Route::post("/check_user","RegisterController@checkUsername")->name('check_user');

Route::get('/home', "HomeController@index")->name('home');

Route::get("/corsi","CorsiController@index")->name('corsi');
Route::get("/check_contenuti","CorsiController@check_contenuti")->name('check_contenuti');
Route::get("/fetch_contenuti","CorsiController@fetch_contenuti")->name('fetch_contenuti');
Route::get("/contenuti","CorsiController@cont")->name('contenuti');
Route::post("/inserimento","CorsiController@inserimento")->name('inserimento');
Route::post("/cerca","CorsiController@cerca")->name('cerca');
Route::post("/iscrizione","CorsiController@iscrizione")->name('iscrizione');

Route::get("/sezione_per","Sezione_perController@index")->name('sezione_per');
Route::post("/carica_foto","Sezione_perController@carica_foto")->name('carica_foto');
Route::get("/exe_img","Sezione_perController@exe_img")->name('exe_img');
Route::get("/check_exercise","Sezione_perController@check_exercise")->name('check_exercise');
Route::get("/exercise","Sezione_perController@exercise")->name('exercise');
Route::post("/ins_exe","Sezione_perController@ins_exe")->name('ins_exe');
Route::get("/cerca_iscrizioni","Sezione_perController@cerca_iscrizioni")->name('cerca_iscrizioni');
Route::post("/unsub","Sezione_perController@unsub")->name('unsub');
Route::post("/cerca_esercizio","Sezione_perController@cerca_esercizio")->name('cerca_esercizio');
Route::post("/scheda","Sezione_perController@scheda")->name('scheda');
Route::get("/cerca_scheda","Sezione_perController@cerca_scheda")->name('cerca_scheda');
Route::post("/elimina_scheda","Sezione_perController@elimina_scheda")->name('elimina_scheda');
