<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HeadphoneController};



Route::get('/headphones', [HeadphoneController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/headphones/create', [HeadphoneController::class, 'create']);
Route::get('/headphones/createdAll', [HeadphoneController::class, 'createAll']);
Route::get('/headphones/update', [HeadphoneController::class, 'update']);
Route::get('/headphones/update', [HeadphoneController::class, 'delete']);
Route::get('/headphones/first_or_create', [HeadphoneController::class, 'firstOrCreate']);
Route::get('/headphones/update_or_create', [HeadphoneController::class, 'updateOrCreate']);
