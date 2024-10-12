<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DocumentTracker extends Model
{
    use HasFactory;

    public function document_type(): BelongsTo{
        return $this->belongsTo(DocumentType::class);
    }

    public function from_employee(): BelongsTo{
        return $this->belongsTo(Employees::class);
    }

    public function to_employee(): BelongsTo{
        return $this->belongsTo(Employees::class);
    }

    public function request(): BelongsToMany{
        return $this->belongsToMany(DocumentRequest::class);
    }

    public function referral(): BelongsToMany{
        return $this->belongsToMany(DocumentReferral::class);
    }


        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'document_type_id',
        'from_employee_id',
        'to_employee_id',
        'request_id',
        'referral_id',
        'document_name',
        'urgent',
        'confidential',
        'subject',
        'remarks',
        'is_archived',
        'file_path'
    ];

    protected $primaryKey = 'document_tracking_code';
}
