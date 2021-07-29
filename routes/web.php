<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController,
    ReservationController,
    ChauffeurController,
    AdminController,
    TrajetController
};

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
    return view('acceuil.layout');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/acceuil', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
///////////////////route des clients

Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');

Route::post('/reservation.store', [ReservationController::class, 'store'])->name('reservation.store');

///////////////route des chauffeurs

Route::get('/chauffeur', [ChauffeurController::class, 'index'])->name('chauffeur');

Route::post('/chauffeur.store', [ChauffeurController::class, 'store'])->name('chauffeur.store');
//Route::post('/chauffeur.cr', [ChauffeurController::class, 'create'])->name('chauffeur.create');
//admin accueil
Route::get('/admin.index', [AdminController::class, 'index'])->name('admin.index');
Route::post('/admin.store', [TrajetController::class, 'store'])->name('admin.store');