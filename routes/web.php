<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NumbersController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [NumbersController::class, 'form']);
Route::get('/fibonacci/{n1}/{n2}', [NumbersController::class, 'fibonacciProduct']);
