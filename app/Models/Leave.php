<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $table = 'leave_apply';

    protected $fillable = [
        'id',
        'employee_id',
        'name',
        'reason',
        'from',
        'to',
        'status',
        'description',
    ];
}
