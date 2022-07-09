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

Route::get('/dashboard', [App\Http\Controllers\PetsController::class, 'index'])
->middleware(['auth'])
->name('dashboard');

// Route::get('/register-pet', function () {
//     return view('pets/register-pet');
// })->middleware(['auth'])->name('register-pet');

Route::get('/register-pet', [App\Http\Controllers\PetsController::class, 'create'])
->middleware(['auth'])
->name('register-pet');

Route::post('/register-pet', [App\Http\Controllers\PetsController::class, 'store'])
->middleware(['auth'])
->name('register-pet');

Route::get('/dashboard/adotar/{id}',[\App\Http\Controllers\PetsController::class,'adotar'])
->middleware(['auth'])
->name('adotar-pet');

Route::get('/pets/adotado',[\App\Http\Controllers\PetsController::class,'show_adotado'])
->middleware(['auth'])
->name('adotado-pet');

Route::get('/pets/doado',[\App\Http\Controllers\PetsController::class,'show_doado'])
->middleware(['auth'])
->name('doado-pet');

Route::get('/pets/historico',[\App\Http\Controllers\PetsController::class,'show_historico'])
->middleware(['auth'])
->name('historico-pet');

require __DIR__.'/auth.php';
