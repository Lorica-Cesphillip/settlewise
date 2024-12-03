<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ArchivesController extends Controller
{
    //
    public function index(){
        try {
            return view('documents.archived');
        } catch (\Exception $e) {
            Log::error('Error rendering the documents.archived view.', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            abort(500, 'An error occurred while loading the page.');
        }
    }

    public function archiveDocuments($id){

    }

    public function show($document_tracking_code){

    }

    public function viewDocuments($document_tracking_code){

    }
}
