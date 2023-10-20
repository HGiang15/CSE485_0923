<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtworkController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/artworks', ArtworkController::class);
