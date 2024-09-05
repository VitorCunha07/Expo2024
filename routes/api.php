<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RpgFichaController;



Route::get('/', function (Request $request) {
    return (['field' => 'ola']);
});


Route::resource('rpg_fichas', RpgFichaController::class);