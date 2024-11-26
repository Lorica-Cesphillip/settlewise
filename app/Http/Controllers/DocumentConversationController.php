<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConversationMessage;
use App\Models\DocumentTracker;
use Illuminate\Support\Facades\Auth;

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

    public function show(ConversationMessage $conversation, DocumentTracker $document){
        return response()->json([$conversation, $document]);
    }
}
