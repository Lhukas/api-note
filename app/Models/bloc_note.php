<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bloc_note extends Model
{
    protected $fillable = [
        'name_bloc_note',
        'modification_bloc_note'
    ];
}
