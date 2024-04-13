<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Employee extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;
    protected $table = 'employee_regi';
    protected $fillable = [
        'employee_id',
        'name',
        'email',
        'gender',
        'place',
        'designation',
        'position',
        'salary',
        'password',
        'confirmpassword',
    ];
}
