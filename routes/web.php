<?php

use App\Http\Controllers\DocumentTrackerController;
use App\Http\Controllers\EmployeeManagementController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//This will be customized according to the existing system.
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/documents', function () {
        return view('documents.dashboard');
    })->name('dashboard');

    /*Incoming Documents */
    Route::get('documents/incoming', function () {
        return view('documents.incoming');
    })->name('incoming');

    /*Outgoing Documents */
    Route::get('documents/outgoing', function () {
        return view('documents.outgoing');
    })->name('outgoing');
    Route::get('/outgoing/transmit', function (){
        return view('documents.forms.document_tracker_request');
    });

    Route::get('documents/archived', function () {
        return view('documents.archived');
    })->name('archived');

    Route::get('documents/aphso_divisions', function () {
        return view('documents.divisions');
    })->name('divisions');

    Route::get('documents/employees', function () {
        Route::resource('/documents/employees', EmployeeManagementController::class);
    })->name('employees');

});

require __DIR__.'/auth.php';
