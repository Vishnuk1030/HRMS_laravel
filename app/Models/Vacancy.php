<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
    protected $table = 'job_vacancy';
    protected $fillable = [
        'job_title',
        'job_description',
        'experience',
        'location',
        'no_of_vacancy',
    ];

}
