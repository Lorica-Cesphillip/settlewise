<?php

use App\Http\Controllers\DivisionsController;
use App\Http\Controllers\OutgoingDocumentsController;
use App\Http\Controllers\EmployeeManagementController;
use App\Http\Controllers\IncomingDocumentsController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ArchivesController;
use App\Http\Controllers\DocumentConversationController;
use App\Models\DocumentTracker;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Node\Block\Document;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
Route::get('/', function () {
    return view('auth.login');
});

//This will be customized according to the existing system.
Route::middleware(['auth', 'verified'])->group(function () {

    /*Document Information Module */
    Route::get('/', function () {
        $incoming_documents = Auth::check() && Auth::user()->divisions->abbreviation == 'HEAD' ? DocumentTracker::with(['from_employee', 'to_employee', 'request', 'referral', 'document_type', 'status'])->where('is_forwarded', '=', 0)->latest()->take(4)->get() : DocumentTracker::with(['from_employee', 'to_employee', 'request', 'referral', 'document_type', 'status'])->latest()->where('to_employee_id', '=', Auth::user()->employee_number)->where('is_forwarded', '=', 1)->take(4)->get();

        $active = count(User::all()->where('emp_status', '=', 1));
        $incoming_count = Auth::check() && Auth::user()->divisions->abbreviation == 'HEAD' ? count(DocumentTracker::all()->where('is_forwarded', '=', 0 )) : count(DocumentTracker::all()->where('to_employee_id', '=', Auth::user()->employee_number));
        $approved_count = count(DocumentTracker::all()->where('from_employee_id', '=', Auth::user()->employee_number)->where('status_id', '=', 2));
        $rejected_count = count(DocumentTracker::all()->where('from_employee_id', '=', Auth::user()->employee_number)->where('status_id', '=', 3));
        $announcements = \App\Models\Announcements::latest();
        return view('documents.dashboard', compact('incoming_documents', 'active', 'incoming_count', 'approved_count', 'rejected_count', 'announcements'));
    })->name('dashboard');

    /*Incoming Documents */
    Route::get('/incoming', [IncomingDocumentsController::class, 'index'])->name('incoming.index');
    Route::patch('/incoming/request/{request_id}/{tracking_code}', [IncomingDocumentsController::class, 'update']);
    Route::get('/api/referral/{full_name}', [OutgoingDocumentsController::class, 'getDivision']);
    Route::patch('/forward-referral', [OutgoingDocumentsController::class, 'update'])->name('outgoing.update');
    Route::post('/incoming/announcement/{tracking_code}', [IncomingDocumentsController::class, 'store']);

    /*Outgoing Documents */
    Route::get('/outgoing', [OutgoingDocumentsController::class, 'index'])->name('outgoing.index');
    Route::post('/outgoing/send', [OutgoingDocumentsController::class, 'store'])->name('outgoing.store');
    Route::get('/api/outgoing/view', [OutgoingDocumentsController::class, 'viewDocument']);
    Route::get('/api/employees/{full_name}/receiver', [OutgoingDocumentsController::class, 'getDivision']);

    //View Documents
    Route::get('/api/document/view/{tracking_code}', [DocumentController::class, 'show']);
    Route::get('/api/document/preview/{tracking_code}', [DocumentController::class, 'document_preview']);

    /*Document Conversation, where each of the incoming and outgoing documents has its own respective conversation. */
    Route::get('/api/document/conversation/{document}', [DocumentConversationController::class, 'show']);
    Route::post('/document/conversation/send', [DocumentConversationController::class, 'store']);

    /*Archived Documents. Only the department head can archive the documents. */
    Route::get('/archived', [ArchivesController::class, 'index'])->name('archived.index');
    Route::get('/api/archived/view', [ArchivesController::class, 'show']);
    Route::put('/archived/{$id}', [ArchivesController::class, 'update'])->name('archived.update');


    /*Employee Information Module*/
    Route::resource('/divisions', DivisionsController::class);
    Route::resource('/employees', EmployeeManagementController::class);
    Route::get('/api/employee/{employeeNumber}', [EmployeeManagementController::class, 'show']);
    Route::get('profile', function(){
        $employee = User::findOrFail(Auth::user()->employee_number);
        return view('documents.employee-information', compact('employee'));
    })->name('profile');
});

require __DIR__.'/auth.php';
