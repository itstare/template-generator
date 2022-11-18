<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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
Route::post('/insert', [HotelController::class, 'insert'])->name('hotel.insert');
Route::get('/{id}/view', [HotelController::class, 'view'])->name('hotel.view');
Route::get('/hotels', [HotelController::class, 'index'])->name('hotel.index');
Route::get('/{id}/edit', [HotelController::class, 'edit'])->name('hotel.edit');
Route::post('/{id}/update', [HotelController::class, 'update'])->name('hotel.update');
Route::get('/{id}/delete', [HotelController::class, 'delete'])->name('hotel.delete');
Route::get('/search', [HotelController::class, 'search'])->name('hotel.search');