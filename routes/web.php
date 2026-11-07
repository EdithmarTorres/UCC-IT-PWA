<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
//ROUTING TO MAIN PAGES OF THE WEBSITE
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/facultydirectory', [PageController::class, 'directory'])->name('facultydirectory');
Route::get('/courses', [PageController::class, 'courses'])->name('courses');
Route::get('/admissions', [PageController::class, 'admissions'])->name('admissions');
Route::get('/social-media', [PageController::class, 'socialMedia'])->name('social-media');