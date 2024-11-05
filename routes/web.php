<?php

use App\Http\Controllers\DivisionsController;
use App\Http\Controllers\DocumentTrackerController;
use App\Http\Controllers\EmployeeManagementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//This will be customized according to the existing system.
Route::middleware(['auth', 'verified'])->group(function () {

    /*Document Information Module */
    Route::get('/documents', function () {
        return view('documents.dashboard');
    })->name('dashboard');

    Route::get('documents/incoming', function () {
        return view('documents.incoming');
    })->name('incoming');


    Route::get('documents/outgoing', function () {
        return view('documents.outgoing');
    })->name('outgoing');
    Route::get('/outgoing/transmit', function (){
        return view('documents.forms.document_tracker_request');
    });

    Route::get('documents/archived', function () {
        return view('documents.archived');
    })->name('archived');

    /*Employee Information Module*/
    Route::get('documents/aphso_divisions', [DivisionsController::class, 'index'])->name('divisions');
    Route::get('/documents/employees', [DivisionsController::class, 'showForm']);
    Route::resource('/documents/employees', EmployeeManagementController::class);
});

require __DIR__.'/auth.php';
Route::post('documents/aphso_divisions', [DivisionsController::class, 'store'])->name('divisions.store');
Route::post('/divisions', [DivisionsController::class, 'store'])->name('divisions.store');
Route::get('/divisions', [DivisionsController::class, 'index'])->name('divisions.index');