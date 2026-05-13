<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;


Route::redirect('/', '/registros');

Route::resource('registros', RegistroController::class);
