<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RpgFichaController;


Route::get('/', function () {
    return view('welcome');
});
Route::resource('rpg_fichas', RpgFichaController::class);