<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Usuários
Route::get('/index-user', [UserController::class, 'index'])->name('user.index');
