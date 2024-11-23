<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DocumentConversation extends Model
{
    use HasFactory;

    public function document_tracker(): BelongsTo{
        return $this->belongsTo(DocumentTracker::class, 'document_tracking_code', 'document_tracking_code');
    }

    public function employeeOne(): BelongsTo{
        return $this->belongsTo(User::class, 'employee_number', 'employee_id_one');
    }

    public function employeeTwo(): BelongsTo{
        return $this->belongsTo(User::class, 'employee_number', 'employee_id_two');
    }

    protected $table = 'document_conversation';

    protected $fillable = [
        'document_tracking_code',
        'employee_id_one',
        'employee_id_two',
    ];

    protected $primaryKey = 'conversation_id';
}
