<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentRequest extends Model
{
    use HasFactory;

    public function document_tracker(){
        return $this->hasMany(DocumentTracker::class, 'document_tracking_code', 'request_id');
    }

    protected $table = 'request_logs';

    protected $fillable = [
        'request_type',
        'details',
        'requested_document',
        'details_purpose',
        'granted',
        'comments_if_granted'
    ];

    protected $primaryKey = 'request_id';
}
