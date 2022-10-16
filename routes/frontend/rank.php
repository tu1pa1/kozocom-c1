<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/rank', function () {
        return Inertia::render('Rank');
    })->name('rank');
});
