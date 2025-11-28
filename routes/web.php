<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Middleware\CheckUser;
use App\Http\Controllers\UserCheckController;


Route::get('/', function () {
    return view('home');
});

// Route::get('/check-user', function () {
//     return "You are allowed!";
// })->middleware(CheckUser::class);   it is also working good

Route::get('/check-user', [UserCheckController::class, 'check'])->middleware(CheckUser::class);



