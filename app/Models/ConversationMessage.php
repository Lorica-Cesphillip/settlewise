<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ConversationMessage extends Model
{
    use HasFactory;

    public function document_conversation(): BelongsTo{
        return $this->belongsTo(DocumentConversation::class);
    }

    public function employee(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    protected $table = 'conversation_message';

    protected $fillable = [
        'employee_id',
        'conversation_id',
        'reply'
    ];

    protected $primaryKey = 'message_id';
}
