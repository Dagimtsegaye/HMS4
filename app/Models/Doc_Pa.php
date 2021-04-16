<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc_Pa extends Model
{
    use HasFactory;
    protected $fillable = [
       'Dia', 'His', 'Pre', 'Syp', 'lab_test', 'Pa_id'
        ];
}
