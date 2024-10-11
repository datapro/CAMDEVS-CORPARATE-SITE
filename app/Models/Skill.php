<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $fillable = [
        'sname',
        'code',
        'fname',
        'age',
        'university',
        'nin',
        'school',
        'membership',
        'address',
        'phone',
        'state',
        'lga',
        'stater',
        'lgar',
        'email',
        'code',

    ];
}
