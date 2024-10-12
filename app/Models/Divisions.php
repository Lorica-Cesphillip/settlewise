<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisions extends Model
{
    use HasFactory;

    protected $table = 'aphso_division';

    protected $primaryKey = 'division_id';
    protected $fillable = [
        'division_name',
        'abbreviation',
        'has_head',
        'no_of_employees'
    ];
}
