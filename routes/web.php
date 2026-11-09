<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/chat', [ChatController::class, 'index'])
    ->name('chat');

Route::post('/chat', [ChatController::class, 'send'])
    ->name('chat.send');