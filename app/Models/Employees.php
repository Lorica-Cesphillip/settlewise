<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
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
        'email'
    ];

    protected $primaryKey = 'employee_number';
}
