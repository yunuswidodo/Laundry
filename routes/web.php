<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaundryController;

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


Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::post('/store', [LaundryController::class, 'store']);
Route::get('/datalaundry', [LaundryController::class, 'datalaundry']) -> name('datalaundry');
Route::get('/editlaundry/{id}', [LaundryController::class, 'editlaundry'])->name('editlaundry');
Route::put('/updatelaundry/{id}', [LaundryController::class, 'updatelaundry'])->name('updatelaundry');
Route::get('/deletelaundry/{id}', [LaundryController::class, 'deletelaundry'])->name('deletelaundry');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
