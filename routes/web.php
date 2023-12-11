<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\AboutustController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\PressController;
use App\Http\Controllers\DetailsController;


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
    return view('accueil');
});

Route::get('/furniture', [PressController::class, 'index']);

Route::get('/furniture/details/{id}', [PressController::class, 'funriturePress']);

Route::get('/accueil', [AccueilController::class, 'index']);

Route::get('/studio',  [StudioController::class, 'index']);

Route::get('/studio/galerie/{id}',  [StudioController::class, 'meubleLonely']);

Route::get('/aboutus',[AboutustController::class,'index']);

// Route::get('/details',[DetailsController::class, 'index']);

// Route::get('/galerie', [GalerieController::class, 'index']);


Route::get('/contact',[ClientController::class, 'index']);

Route::post('/contact',[ClientController::class, 'store']);



