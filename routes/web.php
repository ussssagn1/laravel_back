<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HeadphoneController, MainController};
Route::get('/', function () {
    return view('welcome');
});
Route::get('/headphones/createdAll', [HeadphoneController::class, 'createAll']);


Route::get('/headphones', [HeadphoneController::class, 'index'])->name('headphones.index');
Route::get('/headphones/create', [HeadphoneController::class, 'create'])->name('headphones.create');

Route::post('/headphones', [HeadphoneController::class, 'store'])->name('headphones.store');
Route::get('/headphones/{headphones}', [HeadphoneController::class, 'show'])->name('headphones.show');
Route::get('/headphones/{headphones}/edit', [HeadphoneController::class, 'edit'])->name('headphones.edit');
Route::patch('/headphones/{headphones}', [HeadphoneController::class, 'update'])->name('headphones.update');
Route::delete('/headphones/{headphones}', [HeadphoneController::class, 'destroy'])->name('headphones.delete');




Route::get('/main', [MainController::class, 'index'])->name('main.index');
