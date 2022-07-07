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

Route::get('/dashboard/delete/{id}',[\App\Http\Controllers\PetsController::class,'delete'])
->middleware(['auth'])
->name('delete-pet');

require __DIR__.'/auth.php';
