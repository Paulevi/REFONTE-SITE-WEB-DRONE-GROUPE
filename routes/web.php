<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ViewController;
use App\Http\Controllers\ActuController;

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

Route::get('/actu/{id}', [ActuController::class, 'afficherActualite'])->name('actu.show');



Route::get('/', function () {
    return view('accueil');
});

Route::get('/presentation', function () {
    return view('front_end.presentation');
});

Route::get('/metier', function () {
    return view('front_end.metier');
});

Route::get('/formation', function () {
    return view('front_end.formation');
});

Route::get('/video', function () {
    return view('front_end.video');
});

Route::get('/reglementation', function () {
    return view('front_end.reglementation');
});

Route::get('/presentation', function () {
    return view('front_end.presentation');
});

Route::get('/actualites', function () {
    return view('front_end.actualites');
});