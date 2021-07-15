<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\InfosController;
use App\Http\Controllers\PartenariatController;
use App\Http\Controllers\SavController;
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

Route::get('/acceuil',[AccueilController::class, "index"]);

Route::get('/contact/sav', [SavController::class, "index"])->name('sav');

Route::get('/contact/infos',[InfosController::class, "index"])->name('info');

Route::get('/contact/partenariat',[PartenariatController::class, "index"])->name('partenariat');

Route::get('/team/front', [FrontController::class, "index"])->name('front');

Route::get('/team/back', [BackController::class, "index"])->name('back');     
