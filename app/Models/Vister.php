<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vister extends Model
{
    use HasFactory;

    protected $fillable = [
       'Lab_test', 'To', 'From', 'Pa_id'
        ];
}
