<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConversationMessage;
use App\Models\DocumentTracker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DocumentConversationController extends Controller
{

    /**
     * Needed: Employee Id of the sender/receiver of document.
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request){
        $message = $request->validate([
            'conversation_message' => 'required|max:140|min:1'
        ]);

        ConversationMessage::create([$request->only('reply'), 'employee_id' => Auth::user()->employee_number], );
    }

    public function show(DocumentTracker $document)
    {
        try {
            $conversation = ConversationMessage::where('document_tracking_code', '=', $document->document_tracking_code);
            return response()->json([$conversation, $document]);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error generating response for conversation and document.', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            abort(500, 'An error occurred while generating the response.');
        }
    }
}
