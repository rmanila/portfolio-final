<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.home');
})->name('home');

Route::get('/', function () {
    return view('main.home');
})->name('home');

Route::get('/CP', function () {
    return view('coverpage.index');
})->name('CP');

Route::get('/resume', function () {
    return view('resume.index');
})->name('rs');

Route::get('/certification', function () {
    return view('certification.index');
})->name('certification');

Route::get('/Awards', function () {
    return view('award.index');
})->name('Awards');

Route::get('/contents', function () {
    return view('contents.index');
})->name('contents');


