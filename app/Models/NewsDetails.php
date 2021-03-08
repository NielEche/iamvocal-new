<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsDetails extends Model
{
    use HasFactory;
    protected $fillable = [
        'news_id',
        'file_path',
        'details'
    ];

    public function news() {
        return $this->belongsTo('App\news', 'news_id', 'id');
    }
}
