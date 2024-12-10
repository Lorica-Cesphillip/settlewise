<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\DocumentTracker;
use Illuminate\Support\Carbon;

class ArchivesController extends Controller
{
    //
    public function index(){
        try {
            $archived_documents = DocumentTracker::latest()->with(['from_employee.divisions', 'to_employee.divisions', 'request', 'referral', 'document_type', 'status'])->where('is_archived', '=', 1)->paginate(10);

            return view('documents.archived', compact('archived_documents'));
        } catch (\Exception $e) {
            Log::error('Error rendering the documents.archived view.', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            abort(500, 'An error occurred while loading the page.');
        }
    }

    public function update($id){
        DocumentTracker::where('document_tracking_code', '=', $id)->update(['archived' => 1]);

        return response()->json('success', 200);
    }

    public function show($trackingCode){
        $document = DocumentTracker::with(['from_employee.divisions', 'to_employee.divisions', 'request', 'referral', 'document_type', 'status'])
        ->where('document_tracking_code', '=', $trackingCode)->where('is_archived', '=', 1)
        ->first();
        Log::info( $document);

        if($document){
            $transformedDocument = $document->toArray();
            $transformedDocument['created_at'] = Carbon::parse($document->created_at)->format('m-d-Y');
            $transformedDocument['updated_at'] = Carbon::parse($document->updated_at)->format('m-d-Y');
            return response()->json($transformedDocument);
        }
        else{ return response()->json(['error' => 'This document does not exist in database.'], 404);}
    }
}
