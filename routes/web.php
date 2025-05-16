<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidentController;

Route::get('/', function () {
    return view('home');
});
Route::get('/sejarah', function () {
    return view('sejarah');
});
Route::get('/visidanmisi', function () {
    return view('vns');
});
Route::get('/organisasi', function () {
    return view('organisasi');
});
Route::get('/berita', function () {
    return view('berita');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/lpk', function () {
    return view('lpk');
});

//Auth
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/register', [AuthController::class, 'registerView']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
Route::get('/resident', [ResidentController::class, 'index']);
Route::get('/resident/create', [ResidentController::class, 'create']);
Route::get('/resident/{id}', [ResidentController::class, 'edit']);
Route::post('/resident', [ResidentController::class, 'store']);
Route::put('/resident/{id}', [ResidentController::class, 'update']);
Route::delete('/resident/{id}', [ResidentController::class, 'destroy']);
