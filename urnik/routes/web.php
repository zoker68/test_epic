<?php

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

Route::namespace('App\Http\Controllers\Timetable')->group(function () {
    Route::get('/', IndexController::class)->name('index');
    Route::get('/dodaj', CreateController::class)->name('create');
    Route::post('/store', StoreController::class)->name('store');
    Route::get('/urnik/{activity}',ShowController::class)->name('show');
    Route::view('/uvoz', 'uvoz')->name('uvoz');
    Route::post('/uvoz', ImportController::class)->name('import');
});




