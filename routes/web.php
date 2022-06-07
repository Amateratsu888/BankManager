<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\VilleController;
use App\Http\Controllers\FonctionController;
use App\Http\Controllers\PersonnelController;
use Illuminate\Support\Facades\Auth;
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


// ville routes
Route::get('/ville',[VilleController::class,'index'])->name('ville.index');
Route::post('/ville.save',[VilleController::class,'store'])->name('ville.store');
Route::get('/delete.ville/{id}', [VilleController::class, 'destroy'])->name('ville.delete');
Route::get('/edit.ville/{id}', [VilleController::class, 'edit'])->name('edit.ville');
Route::post('/update.ville/{id}', [VilleController::class, 'update'])->name('update.ville');

// fonction routes
Route::get('/fonction',[FonctionController::class,'index'])->name('fonction.index');
Route::post('/fonction.save',[FonctionController::class,'store'])->name('fonction.store');
Route::get('/delete.fonction/{id}', [FonctionController::class, 'destroy'])->name('fonction.delete');
Route::get('/edit.fonction/{id}', [FonctionController::class, 'edit'])->name('edit.fonction');
Route::post('/update.fonction/{id}', [FonctionController::class, 'update'])->name('update.fonction');

// bank routes
Route::get('/bank',[BankController::class,'index'])->name('bank.index');
Route::post('/bank.save',[BankController::class,'store'])->name('bank.store');
Route::get('/delete.bank/{id}', [BankController::class, 'destroy'])->name('bank.delete');
Route::get('/edit.bank/{id}', [BankController::class, 'edit'])->name('edit.bank');
Route::post('/update.bank/{id}', [BankController::class, 'update'])->name('update.bank');

//personnel routes
Route::get('/personnel',[PersonnelController::class,'index'])->name('personnel.index');
Route::post('/personnel.save',[PersonnelController::class,'store'])->name('personnel.store');
Route::get('/delete.personnel/{id}', [PersonnelController::class, 'destroy'])->name('personnel.delete');
Route::get('/edit.personnel/{id}', [PersonnelController::class, 'edit'])->name('edit.personnel');
Route::post('/update.personnel/{id}', [PersonnelController::class, 'update'])->name('update.personnel');
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
