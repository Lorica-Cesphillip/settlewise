<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Announcements extends Model
{
    use HasFactory;

    protected $table = 'announcement_logs';

    public function document_tracker(): BelongsTo{
        return $this->belongsTo(DocumentTracker::class, 'document_tracking_code', 'document_tracking_code');
    }

    protected $fillable = [
        'document_tracking_code',
        'what',
        'when',
        'where',
        'who',
        'notes',
        'created_at',
        'updated_at',
        'date_expired',
        'is_posted'
    ];

    protected $primaryKey = 'announcement_id';
}
