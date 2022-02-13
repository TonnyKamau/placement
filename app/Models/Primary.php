<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Primary extends Model
{
    use HasFactory;
    protected $fillable = [
        'primary_code',
        'primary_name',
        'county',
        'subcounty',
        'type',
        'capacity',
        'Box',
        'email',
    ];
}
