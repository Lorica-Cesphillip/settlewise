<?php

use App\Http\Controllers\DivisionsController;
use App\Http\Controllers\OutgoingDocumentsController;
use App\Http\Controllers\EmployeeManagementController;
use App\Http\Controllers\IncomingDocumentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

//This will be customized according to the existing system.
Route::middleware(['auth', 'verified'])->group(function () {

    /*Document Information Module */
    Route::get('/dashboard', function () {
        return view('documents.dashboard');
    })->name('dashboard');

    Route::resource('/incoming', IncomingDocumentsController::class);
    Route::resource('/outgoing',OutgoingDocumentsController::class);

    Route::get('documents/archived', function () {
        return view('documents.archived');
    })->name('archived');

    /*Employee Information Module*/
    Route::resource('/divisions', DivisionsController::class);
    Route::resource('/employees', EmployeeManagementController::class);
    Route::get('profile', function(){
        return view('documents.employee-information');
    })->name('profile');
});

require __DIR__.'/auth.php';
Route::post('documents/aphso_divisions', [DivisionsController::class, 'store'])->name('divisions.store');
Route::post('/divisions', [DivisionsController::class, 'store'])->name('divisions.store');
Route::get('/divisions', [DivisionsController::class, 'index'])->name('divisions.index');
Route::post('/division/update', [DivisionsController::class, 'update'])->name('division.update'); /* Added new route */
Route::post('/divisions/store', [DivisionsController::class, 'store'])->name('division.store'); /* Added new route */