<?php

use App\Http\Controllers\DivisionsController;
use App\Http\Controllers\OutgoingDocumentsController;
use App\Http\Controllers\EmployeeManagementController;
use App\Http\Controllers\IncomingDocumentsController;
use App\Models\DocumentTracker;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

//This will be customized according to the existing system.
Route::middleware(['auth', 'verified'])->group(function () {

    /*Document Information Module */
    Route::get('/dashboard', function () {
        $incoming_documents = DocumentTracker::latest()->paginate(4);
        return view('documents.dashboard', compact('incoming_documents'));
    })->name('dashboard');

    Route::resource('/incoming', IncomingDocumentsController::class);
    Route::resource('/outgoing',OutgoingDocumentsController::class);
    //Fix the API
    Route::get('/api/employees/receiver', [OutgoingDocumentsController::class, 'getDivision']);

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
