<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return redirect()->route('books.index');
})->name('home');

Route::resource('books', BookController::class);