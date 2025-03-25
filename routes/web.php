<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/members', [MemberController::class, 'index']);

Route::get('/members/create', function () {
    return view('members.create');
});

Route::get('/members/{id}', function ($id) {

    return view('members.show', ["id" => $id]);
});
