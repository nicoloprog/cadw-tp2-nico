<?php

use App\Http\Controllers\FaitController;
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

Route::get('/', [FaitController::class, 'index'])
    ->name('accueil');


Route::get('/listeFaits', [FaitController::class, 'listeFaits'])
    ->name('listeFaits');


Route::get('/ajoutFait', [FaitController::class, 'ajoutFait'])
    ->name('ajoutFait');

Route::post('/faits/sauvegarder/', [FaitController::class, 'store']);
Route::get('/faits/supprimer/{id}', [FaitController::class, 'destroy']);
