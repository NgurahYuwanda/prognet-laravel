<?php

use App\Http\Controllers\BioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cekController;
use App\Http\Controllers\FormController;
use Symfony\Component\Routing\Router;

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

// Route::get('post', [FormController::class, 'index']);
// Route::get('form', [cekController::class, 'create']);
// Route::get('proses_input', [cekController::class, 'show']);
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BioController::class, 'index']);
Route::resource('/form', FormController::class);
route::resource('formlist/create', FormController::class);
Route::resource('formtambah', FormController::class);
Route::put('/formtambah/{id}', 'FormController@update')->name('formtambah.update');
