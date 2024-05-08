<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get("weather" , [WeatherController::class, "index"]);

Route::match(["get" ,"post"], "weather", [WeatherController::class, "index"])->name("weather.form");


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(['auth', ])->group(function () {
    // Define routes that require authentication here
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::middleware(['auth', ])->group(function () {
    // Define routes that require authentication here
    Route::get('weather', function () {
        return view('weather');
    })->name('weather');
});


Route::get('/support', function () {
    return view('support');
})->name('support');

require __DIR__.'/auth.php';
