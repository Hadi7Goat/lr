<?php

use App\Http\Controllers\Demande\DemandeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboardlist', function () {
    return view('admin.dashboard');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboardhome', function () {
        return view('admin.dashboard');
    })->name('dashboardhome');;

    Route::get('/demandes', [DemandeController::class, 'GetAllDemandes'])->name('demandes');
    Route::get('/demande', [DemandeController::class, 'GetDemandeParId'])->name('demande');
    Route::get('/delete/{id}', [DemandeController::class, 'Remove']);

});
