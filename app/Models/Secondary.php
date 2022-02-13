<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secondary extends Model
{
    use HasFactory;
    protected $fillable = [
        'secondary_code',
        'secondary_name',
        'county',
        'subcounty',
        'type',
        'capacity',
        'min_marks',
        'Box',
        'email',
    ];
}
