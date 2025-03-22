<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/members', function () {
    $members = [
        ["name" => "Miyabi", "skill" => 100, "id" => "0"],
        ["name" => "Ellen", "skill" => 60, "id" => "1"]
    ];
    return view('members.index', ["greeting" => "yokoso!", "members" => $members]);
});

Route::get('/members/{id}', function ($id) {

    return view('members.show', ["id" => $id]);
});
