<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\peliculaController;


Route::get('/',[peliculaController::class,'index'])->name('index');

