<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document_Status extends Model
{
    use HasFactory;

    protected $table = 'document_status';
    protected $fillable = ['document_status'];
    protected $primaryKey = 'status_id';
}
