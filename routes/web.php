<?php

use App\Http\Controllers\ConsultaController;
use Illuminate\Support\Facades\Route;

Route::resource('consultas', ConsultaController::class);

Route::get('/', function () {
    return redirect()->route('consultas.index');
});
