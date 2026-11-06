
<?php

use Illuminate\Support\Facades\Route;

//Using the the controller called PagedController to handle the routing of the pages in the app
use App\Http\Controllers\PageController;

// ROUTING TO OUR MAIN PAGE (HOME PAGE)
Route::get('/', [PageController::class, 'index'])->name('home');

// ROUTING TO UCC FACULTY/STAFF DIRECTORY PAGE
Route::get('/directory', [PageController::class, 'directory'])->name('directory');

// ROUTING TO COURSES PAGE
Route::get('/courses', [PageController::class, 'courses'])->name('courses');

// ROUTING TO THE ADMISSIONS PAGE
Route::get('/admissions', [PageController::class, 'admissions'])->name('admissions');

// ROUTING TO THE UCC SOCIAL MEDIA PAGE
Route::get('/social-media', [PageController::class, 'socialMedia'])->name('social-media');
