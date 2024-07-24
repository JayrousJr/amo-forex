<?php

use App\Http\Controllers\MessageControler;
use App\Http\Controllers\PagesControler;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesControler::class, "index"])->name("home");
Route::get('/#contact', [PagesControler::class, "index"])->name("to_contacts");
Route::post("send_message", [MessageControler::class, "messages"])->name("send");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});