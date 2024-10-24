<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DocumentReferral extends Model
{
    use HasFactory;

    protected $table = 'referral_logs';

    public function referred_employee(): HasOne{
        return $this->hasOne(User::class);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'employee_number',
        'for',
        'for_urgent',
        'please',
        'plase_urgent',
        'remarks',
        'employee_response',
        'approved_by_head'
    ];


    protected $primaryKey = 'referral_id';
}
