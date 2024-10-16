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
    Route::get('documents/aphso_divisions', function () {
        return view('documents.aphso-divisions');
    })->name('divisions');

    Route::get('/documents/employees', [EmployeeManagementController::class, 'index'])->name('employees.index');
    Route::get('/documents/employees/add', [DivisionsController::class, 'showForm'])->name('employees.add');
    Route::get('/documents/edit_employee_info', [EmployeeManagementController::class, 'edit'])->name('employees.edit');
    Route::patch('/documents/edit_employee_info', [EmployeeManagementController::class, 'update'])->name('employees.update');
    Route::delete('/documents/edit_employee_info', [EmployeeManagementController::class, 'destroy'])->name('employees.destroy');
});

require __DIR__.'/auth.php';
