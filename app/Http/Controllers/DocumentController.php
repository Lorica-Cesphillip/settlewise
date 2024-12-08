<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentTracker;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class DocumentController extends Controller
{
    /**
     * Display the specified resource. Must Return a json Array.
     */
    public function show($trackingCode)
    {
        $document = DocumentTracker::with(['from_employee.divisions', 'to_employee.divisions', 'request', 'referral', 'document_type', 'status'])
        ->where('document_tracking_code', '=', $trackingCode)
        ->first();

        if($document){
            $transformedDocument = $document->toArray();
            $transformedDocument['created_at'] = Carbon::parse($document->created_at)->format('m-d-Y');
            $transformedDocument['updated_at'] = Carbon::parse($document->updated_at)->format('m-d-Y');
            return response()->json($transformedDocument);
        }
        else{ return response()->json(['error' => 'This document does not exist in database.'], 404);}
    }

    public function document_preview($trackingCode){

    }
}
