<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Document_Status extends Model
{
    use HasFactory;

    public function document_tracker(): HasMany{
        return $this->hasMany(DocumentTracker::class);
    }

    protected $table = 'document_status';
    protected $fillable = ['document_status'];
    protected $primaryKey = 'status_id';

    public function bgColor(): string
{
    return match ($this->status_id) {
        1 => 'bg-yellow-500', // Pending
        2 => 'bg-green-500',  // Request Accepted
        3 => 'bg-red-500',    // Request Rejected
        4 => 'bg-blue-500',   // Document Forwarded
        5 => 'bg-purple-500', // To be Referred
        6 => 'bg-orange-500',   // Archived
        7 => 'bg-teal-500',   // Announced
        default => 'bg-gray-300', // Default
    };
}
}
