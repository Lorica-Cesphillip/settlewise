<?php

use App\Http\Controllers\DocumentTrackerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//This will be customized according to the existing system.
Route::middleware(['auth', 'verified'])->group(function () {
    /*
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');*/
    Route::get('/documents', function () {
        return view('documents.dashboard');
    })->name('dashboard');

    Route::get('/incoming', function () {
        return view('documents.incoming');
    })->name('incoming');

    Route::get('/outgoing', function () {
        return view('documents.outgoing');
    })->name('outgoing');
    Route::get('/outgoing/transmit', function (){
        return view('documents.forms.document_tracker_request');
    });

    Route::get('/archived', function () {
        return view('documents.archived');
    })->name('archived');

    Route::get('/aphso_divisions', function () {
        return view('documents.aphso_divisions');
    })->name('divisions');

    Route::get('/aphso_employees', function () {
        return view('documents.employees');
    })->name('employees');
});

require __DIR__.'/auth.php';
