<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages;
use App\Http\Controllers\gerer_emploi;
use App\Http\Controllers\FormateurController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|formateurs
*/
Route::get("/",[pages::class,'index']);
Route::get("/formateurs",[pages::class,'afficher_formateurs']);
Route::post("/ajouter_formateur",[FormateurController::class,'ajouter_formateur'])->name('ajouter_formateur');
Route::post("/ajouter_emploi",[gerer_emploi::class,'ajouter_emploi'])->name('ajouter_emploi');

