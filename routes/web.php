<?php

use App\Http\Controllers\DivisionsController;
use App\Http\Controllers\OutgoingDocumentsController;
use App\Http\Controllers\EmployeeManagementController;
use App\Http\Controllers\IncomingDocumentsController;
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
    Route::get('/api/incoming/view/{tracking_code}', [IncomingDocumentsController::class, 'show']);
    Route::get('/api/referral/{full_name}', [OutgoingDocumentsController::class, 'getDivision']);
    Route::post('/forward-request', [OutgoingDocumentsController::class, 'acceptRequest'])->name('outgoing.accept');
    Route::post('/reject-request', [OutgoingDocumentsController::class, 'rejectRequest'])->name('outgoing.reject');
    Route::post('/forward-referral', [OutgoingDocumentsController::class, 'storeReferral'])->name('outgoing.storeReferral');

    /*Outgoing Documents */
    Route::get('/outgoing', [OutgoingDocumentsController::class, 'index'])->name('outgoing.index');
    Route::post('/outgoing/send', [OutgoingDocumentsController::class, 'sendDocument'])->name('outgoing.store');
    Route::get('/api/outgoing/view', [OutgoingDocumentsController::class, 'viewDocument']);
    //Fix the API
    Route::get('/api/employees/{full_name}/receiver', [OutgoingDocumentsController::class, 'getDivision']);

    /*Document Conversation, where each of the incoming and outgoing documents has its own respective conversation. */

    Route::get('/archived', [ArchivesController::class, 'index'])->name('archived.index');
    Route::get('/api/archives/view', [ArchivesController::class, 'show']);
    Route::post('/archive-document', [ArchivesController::class, 'archiveDocuments']);


    /*Employee Information Module*/
    Route::resource('/divisions', DivisionsController::class);
    Route::resource('/employees', EmployeeManagementController::class);
    Route::get('profile', function(){
        return view('documents.employee-information');
    })->name('profile');
});

require __DIR__.'/auth.php';
