<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class BlocNote extends Model
{
    protected $fillable = [
        'name_bloc_note',
        'modification_bloc_note'
    ];
}
