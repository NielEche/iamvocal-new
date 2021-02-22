<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeHeader extends Model
{
    use HasFactory;
    protected $fillable = [
        'button_text',
        'button_link',
        'file_path',
    ];
}
