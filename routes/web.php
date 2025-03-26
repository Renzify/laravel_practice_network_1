<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/members', [MemberController::class, 'index'])->name('member.index');
Route::get('/members/create', [MemberController::class, 'create'])->name('member.create');
Route::get('/members/{id}', [MemberController::class, 'show'])->name('member.show');
