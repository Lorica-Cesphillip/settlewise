<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\DocumentConversation;
use App\Models\ConversationMessage;

class DocumentConversationController extends Controller
{

    /**
     * Needed: Employee Id of the sender/receiver of document.
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request){
        $request->validate([
            'conversation_message' => 'required|max:140|min:1'
        ]);

        ConversationMessage::create($request->all());
    }

    public function show(DocumentConversation $id){
        return view('modals.view-conversation', compact('id'));
    }
}
