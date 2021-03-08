<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'file_path',
        'file_path1',
        'title',
        'date',
        'details'
    ];

    protected $table = 'news';
    protected $primaryKey = 'id';

    public function newsdetails() {
        return $this->hasMany('App\newsdetails','news_id');
}
}
