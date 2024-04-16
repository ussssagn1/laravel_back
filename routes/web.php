<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HeadphoneController};

Route::get('/headphones', [HeadphoneController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});
