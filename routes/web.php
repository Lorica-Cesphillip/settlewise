<?php

use App\Http\Controllers\DivisionsController;
use App\Http\Controllers\OutgoingDocumentsController;
use App\Http\Controllers\EmployeeManagementController;
use App\Http\Controllers\IncomingDocumentsController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ArchivesController;
use App\Models\DocumentTracker;
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

    /*Incoming Documents */
    Route::get('/incoming', [IncomingDocumentsController::class, 'index'])->name('incoming.index');
    Route::get('/api/referral/{full_name}', [OutgoingDocumentsController::class, 'getDivision']);
    Route::patch('/incoming/request/{document_tracking_code}', [IncomingDocumentsController::class, 'update'])->name('granted');
    Route::patch('/forward-referral', [OutgoingDocumentsController::class, 'update'])->name('outgoing.update');

    /*Outgoing Documents */
    Route::get('/outgoing', [OutgoingDocumentsController::class, 'index'])->name('outgoing.index');
    Route::post('/outgoing/send', [OutgoingDocumentsController::class, 'sendDocument'])->name('outgoing.store');
    Route::get('/api/outgoing/view', [OutgoingDocumentsController::class, 'viewDocument']);
    Route::get('/api/employees/{full_name}/receiver', [OutgoingDocumentsController::class, 'getDivision']);

    //View Documents
    Route::get('/api/document/view/{tracking_code}', [DocumentController::class, 'show']);
    Route::get('/api/document/preview/{tracking_code}', [DocumentController::class, 'document_preview']);

    /*Document Conversation, where each of the incoming and outgoing documents has its own respective conversation. */

    /*Archived Documents. Only the department head can archive the documents. */
    Route::get('/archived', [ArchivesController::class, 'index'])->name('archived.index');
    Route::get('/api/archived/view', [ArchivesController::class, 'show']);
    Route::put('/archived/{$id}', [ArchivesController::class, 'update'])->name('archived.update');


    /*Employee Information Module*/
    Route::resource('/divisions', DivisionsController::class);
    Route::resource('/employees', EmployeeManagementController::class);
    Route::get('/api/employee/{employeeNumber}', [EmployeeManagementController::class, 'show']);
    Route::get('profile', function(){
        return view('documents.employee-information');
    })->name('profile');
});

require __DIR__.'/auth.php';
