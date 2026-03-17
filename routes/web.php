<?php

use App\Models\Carrera;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/prueba', function() {
    return Carrera::obtenerCarreras();
});