<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DocumentConversation extends Model
{
    use HasFactory;

    public function document_tracker(): BelongsTo{
        return $this->belongsTo(DocumentTracker::class);
    }

    public function employeeOne(): BelongsTo{
        return $this->belongsTo(Employees::class);
    }

    public function employyeTwo(): BelongsTo{
        return $this->belongsTo(Employees::class);
    }

    protected $table = 'document_conversation';

    protected $fillable = [
        'document_tracking_code',
        'employee_id_one',
        'employee_id_two',
    ];

    protected $primaryKey = 'conversation_id';
}
