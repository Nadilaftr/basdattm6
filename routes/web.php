<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', function () {
    return view('baru1');
});

Route::get('/cv', function () {
    return view('cv');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/fact', function () {
    return view('Fakta');
});

Route::get('/Media Sosial', function () {
    return view('media');
});

use App\Http\Controllers\SkillController;
Route::resource('skill', SkillController::class);

use App\Http\Controllers\ContactsController;

Route::resource('contacts', ContactsController::class);


