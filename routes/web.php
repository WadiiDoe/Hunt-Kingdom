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
    return view('layouts/app');
});
Route::get("/event",[\App\Http\Controllers\EventController::class,"index"])->name('event');
Route::get("/createEvent",[\App\Http\Controllers\EventController::class,"create"])->name('event.create');

Route::post("/createEvent",[\App\Http\Controllers\EventController::class,"store"])->name('event.store');

Route::get("/editEvent/{event}",[\App\Http\Controllers\EventController::class,"edit"])->name('event.edit');
Route::put("/editEvent/{event}",[\App\Http\Controllers\EventController::class,"update"])->name('event.update');
Route::delete("/deleteEvent/{event}",[\App\Http\Controllers\EventController::class,"destroy"])->name('event.destroy');
