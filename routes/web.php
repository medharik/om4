<?php

use App\Http\Controllers\CoursController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\StudController;
use App\Http\Controllers\StudentController;
use App\Models\Personnel;
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
Route::get('/modele', function () {
    return view('modele');
});
Route::get('new', [ProduitController::class, 'nouveau']);
Route::get('/produits', [ProduitController::class, 'liste']);
Route::post('/enregistrer', [ProduitController::class, 'enregistrer']);

Route::get('/tous', [ProduitController::class, 'tous']);
//afficher un form pour creer un nouveau cours
Route::get('/cours/create', [CoursController::class, 'create']);
Route::post('/cours', [CoursController::class, 'store']);
Route::get('/cours', [CoursController::class, 'index'])->name("cours.index");
// route('cours.index') url('/cours')
// Route::get('/filieres/create',  [FiliereController::class, 'create'])->name('filiere.create');
Route::resource('filiere', FiliereController::class);
Route::apiResource('students', StudentController::class);
//generation des 7 liens restfull
Route::resource('personnels', PersonnelController::class);
Route::apiResource('/api/studs', StudController::class);

