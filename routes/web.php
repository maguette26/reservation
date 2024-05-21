<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenReservationController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('administrateur', AdministrateurController::class);
Route::resource('utilisateurs', UtilisateurController::class);
Route::resource('evenements', EvenementController::class);
Route::resource('type', TypeEvenementController::class);
Route::resource('reservations', ReservationController::class);
Route::resource('even_reserv', EvenReservationController::class);
