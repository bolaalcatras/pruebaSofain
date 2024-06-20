<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

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

Route::view('/login', "InicioSesion.login")->name('login');
Route::view('/registro', "InicioSesion.register")->name('registro');
Route::post('/validar-registro', [LoginController::class , 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class , 'login'])->name('inicio-sesion');
Route::get('/logout', [LoginController::class , 'logout'])->name('logout');


Route::post('/storeC', [MenuController::class , 'store'])->name('crudMenu.store');
Route::get('/indexC', [MenuController::class , 'index'])->middleware('auth')->name('indexC');
Route::get('/showC/{datosDish}', [DishController::class , 'show'])->name('crudMenu.show');
Route::get('/editC/{datos}/editados', [MenuController::class , 'edit'])->name('crudMenu.edit');
Route::get('/createC/nuevo', [MenuController::class , 'create'])->name('crudMenu.create');


Route::post('/storeCategory', [CategoryController::class , 'store'])->name('crudCategory.store');
