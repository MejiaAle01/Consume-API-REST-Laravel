<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;


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

Route::get("/", [PersonasController::class, "index"])->name('personas.index');
Route::get("/create", [PersonasController::class, "create"])->name('personas.create');
Route::post("/store", [PersonasController::class, "store"])->name('personas.store');
Route::get("/edit/{id}", [PersonasController::class, "edit"])->name('personas.edit');
Route::put("/update/{id}", [PersonasController::class, "update"])->name('personas.update');
Route::get("/show/{id}", [PersonasController::class, "show"])->name('personas.show');
Route::delete("/delete/{id}", [PersonasController::class, "destroy"])->name('personas.destroy');
