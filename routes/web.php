<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ProductController;
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



Route::resource("/animal", AnimalController::class);
Route::resource("/category", CategoryController::class);
//For adding an image
Route::get('/add-image', [AnimalController::class, 'addImage'])->name('images.add');

//For storing an image
Route::post('/store-image', [AnimalController::class, 'storeImage'])
    ->name('images.store');

//For showing an image
Route::get('/view-image', [AnimalController::class, 'viewImage'])->name('images.view');
