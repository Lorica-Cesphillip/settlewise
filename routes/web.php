<?php

use App\Http\Controllers\DocumentTrackerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/documents', function () {
    return view('documents.dashboard');
})->middleware(['auth', 'verified'])->name('documents.dashboard');

Route::get('/incoming', function () {
    return view('documents.incoming');
})->middleware(['auth', 'verified'])->name('documents.incoming');

Route::get('/outgoing', function () {
    return view('documents.outgoing');
})->middleware(['auth', 'verified'])->name('documents.outgoing');

Route::get('/archived', function () {
    return view('documents.archived');
})->middleware(['auth', 'verified'])->name('documents.archived');

Route::get('/aphso_divisions', function () {
    return view('documents.aphso_divisions');
})->middleware(['auth', 'verified'])->name('documents.aphso_divisions');

Route::get('/aphso_employees', function () {
    return view('documents.employees');
})->middleware(['auth', 'verified'])->name('documents.employees');


//This will be customized according to the existing system.
Route::middleware('auth')->group(function () {
    /*
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');*/

});

require __DIR__.'/auth.php';
