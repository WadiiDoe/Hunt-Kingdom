<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProduitController;
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




Route::get("/produit",[\App\Http\Controllers\ProduitController::class,"index"])->name('produit');
Route::get("/createProduit",[\App\Http\Controllers\ProduitController::class,"create"])->name('produit.create');
Route::resource("/category", CategoryController::class);

Route::post("/createProduit",[\App\Http\Controllers\ProduitController::class,"store"])->name('produit.store');

Route::get("/editProduit/{produit}",[\App\Http\Controllers\ProduitController::class,"edit"])->name('produit.edit');
Route::put("/editProduit/{produit}",[\App\Http\Controllers\ProduitController::class,"update"])->name('produit.update');
Route::delete("/deleteProduit/{produit}",[\App\Http\Controllers\ProduitController::class,"destroy"])->name('produit.destroy');

