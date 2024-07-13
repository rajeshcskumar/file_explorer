<?php

use App\Http\Middleware\Authenticate;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Dashbaord;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

//Route::middleware('auth')->group(function () {
Route::middleware([Authenticate::class])->group(function () {
   Route::get('/', Dashbaord::class)->name('dashboard');
});
