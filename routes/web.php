<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/members', [MemberController::class, 'index']);
Route::get('/members/create', [MemberController::class, 'create']);
Route::get('/members/{id}', [MemberController::class, 'show']);
