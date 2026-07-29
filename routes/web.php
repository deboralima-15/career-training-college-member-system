<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', function () {
    return redirect('/home');
});

Route::get('/home', [MemberController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/members/create', [MemberController::class, 'create']);
Route::post('/members', [MemberController::class, 'store']);

Route::get('/members/{id}', [MemberController::class, 'show']);

Route::get('/members/{id}/edit', [MemberController::class, 'edit']);
Route::put('/members/{id}', [MemberController::class, 'update']);

Route::delete('/members/{id}', [MemberController::class, 'destroy']);
