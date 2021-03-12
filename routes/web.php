<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\DraftsmanController;
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

Route::get('/', [NavController::class, 'index']);
Route::get('/characterList', [NavController::class, 'characterList']);
Route::get('/draftsmanList', [NavController::class, 'draftsmanList']);
Route::get('/characterAdd', [NavController::class, 'characterAdd']);
Route::get('/draftsmanAdd', [NavController::class, 'draftsmanAdd']);
Route::post('/characterModifPage/{id}', [NavController::class, 'characterModif']);
Route::post('/modifDraftsmanPage/{id}', [NavController::class, 'draftsmanModif']);


Route::post('/deleteCharacter/{id}', [CharacterController::class, 'delete']);
Route::post('/modifCharacter/{id}', [CharacterController::class, 'modif']);
Route::post('/addCharacter', [CharacterController::class, 'add']);

Route::post('/deleteDraftsman/{id}', [DraftsmanController::class, 'delete']);
Route::post('/modifDraftsman/{id}', [DraftsmanController::class, 'modif']);
Route::post('/addDraftsman', [DraftsmanController::class, 'add']);

