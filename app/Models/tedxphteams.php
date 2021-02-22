<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tedxphteams extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_path',
        'name',
        'position',
        'about'
    ];
}
