<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ConversationMessage extends Model
{
    use HasFactory;

    public function document_tracker(): BelongsTo{
        return $this->belongsTo(DocumentTracker::class, 'document_tracking_code', 'document_tracking_code');
    }

    public function employee(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    protected $table = 'conversation_message';

    protected $fillable = [
        'employee_id',
        'document_tracking_code',
        'reply'
    ];

    protected $primaryKey = 'message_id';
}
