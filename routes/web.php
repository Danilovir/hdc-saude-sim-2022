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
use App\Http\Controllers\EventController;
use App\Http\Controllers\ConsultaController;



Route::get('/', [ConsultaController::class, 'index'] );
Route::get('/events/create', [ConsultaController::class, 'create']);
Route::get('/events/{id}', [ConsultaController::class, 'show']);
Route::get('/events', [ConsultaController::class, 'store']);




Route::get('/contac', function () {
    return view('contac');
});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
