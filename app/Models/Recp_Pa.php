<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recp_Pa extends Model
{
    use HasFactory;
    protected $fillable = [
    'C_number','fname', 'mname','dob', 'sex', 'Phone', 'Address', 'worda', 'kebel', 'status'
    ];
}
