<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_name',
        'aphso_division',
        'document_type',
        'subject',
        'file'
    ];
}
