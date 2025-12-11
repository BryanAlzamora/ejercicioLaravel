<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peliculaController;


Route::get('/',[peliculaController::class,'index'])->name('index');
Route::get('detalles/{id}',[peliculaController::class,'show'])->name('detalles');
