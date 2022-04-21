<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ColorXMLController;

Route::resource('colors', ColorController::class);
Route::resource('colors/xml', ColorXMLController::class);
