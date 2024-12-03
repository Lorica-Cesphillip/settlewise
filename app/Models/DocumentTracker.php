<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DocumentTracker extends Model
{
    use HasFactory;

    protected $table = 'document_tracker';

    public function document_type(): BelongsTo{
        return $this->belongsTo(DocumentType::class, 'document_type_id', 'id');
    }

    public function from_employee(): BelongsTo{
        return $this->belongsTo(User::class, 'from_employee_id', 'employee_number');
    }

    public function to_employee(): BelongsTo{
        return $this->belongsTo(User::class, 'to_employee_id', 'employee_number');
    }

    public function request(): HasMany{
        return $this->hasMany(DocumentRequest::class, 'request_id', 'request_id');
    }

    public function referral(): HasMany{
        return $this->hasMany(DocumentReferral::class, 'referral_id', 'referral_id');
    }

    public function status(): BelongsTo{
        return $this->belongsTo(Document_Status::class, 'status_id', 'status_id');
    }


        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'document_type_id',
        'others',
        'from_employee_id',
        'to_employee_id',
        'request_id',
        'referral_id',
        'document_name',
        'urgent',
        'confidential',
        'subject',
        'remarks',
        'created_at',
        'updated_at',
        'status_id',
        'is_archived',
        'file_path'
    ];

    protected $primaryKey = 'document_tracking_code';
}
