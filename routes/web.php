<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('store-contact', [ContactController::class, 'store_contact'])->name('store-contact')->middleware('throttle:5,10');
