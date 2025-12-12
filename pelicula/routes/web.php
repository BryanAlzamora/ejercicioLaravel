<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peliculaController;
use App\Http\Controllers\loginController;


Route::get('/',[peliculaController::class,'index'])->name('index');

Route::get('detalles/{id}',[peliculaController::class,'show'])->name('detalles');

Route::get('/create',[peliculaController::class,'createForm'])->name('createForm');
Route::post('/create',[peliculaController::class,'create'])->name('create');

Route::get('/modify',[peliculaController::class,'modidyForm'])->name('modifyForm');
Route::post('/modify',[peliculaController::class,'modify'])->name('modify');


Route::get('/delete/{id}',[peliculaController::class,'delete'])->name('delete');

//auth
Route::get('/loginForm',[loginController::class,'index'])->name('loginForm');
Route::post('/login',[loginController::class,'validarLogin'])->name('login');
Route::get('/logout',[loginController::class,'cerrarSesion'])->name('logout');