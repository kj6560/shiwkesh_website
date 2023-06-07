<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

//site
Route::middleware(['settings'])->get('/', [SiteController::class, 'index'])->name('home');
Route::fallback([SiteController::class,'fallback'])->name('fallback');
