<?php

use App\Http\Controllers\CoursController;
use App\Http\Controllers\ProduitController;
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
    return view('welcome');
});
Route::get('new', [ProduitController::class, 'nouveau']);
Route::get('/produits', [ProduitController::class, 'liste']);
Route::post('/enregistrer', [ProduitController::class, 'enregistrer']);

Route::get('/tous', [ProduitController::class, 'tous']);
//afficher un form pour creer un nouveau cours
Route::get('/cours/create', [CoursController::class, 'create']);
Route::post('/cours', [CoursController::class, 'store']);
Route::get('/cours', [CoursController::class, 'index']);


