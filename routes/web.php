<?php

use Database\Factories\UserFactory;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\primerControllador;
use App\Http\Controllers\segundoControllador;

Route::get('/', function () {
    return view('primer.home');
});


route::resource('primer', primerControllador::class);
route::resource('segundo',segundoControllador::class);
// este primer es el mimos que ahora mostrare