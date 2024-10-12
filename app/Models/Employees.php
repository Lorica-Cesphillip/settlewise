<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'aphso_employees';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'division_id',
        'lname',
        'fname',
        'mname',
        'position',
        'address',
        'birthdate',
        'martial_status',
        'contact_nos',
        'email',
        'image_path',
        'email_verified_at'
    ];

    protected $primaryKey = 'employee_number';

    public function division(): BelongsTo{
        return $this->belongsTo(Divisions::class, 'division_id', 'division_id');
    }
}
