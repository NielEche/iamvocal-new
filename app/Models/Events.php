<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $fillable = [
        'event_name',
        'event_theme',
        'date',
        'time',
        'venue',
        'about',
        'file_path',
        'file_path1'
    ];

    protected $table = 'events';
    protected $primaryKey = 'id';

    public function speakers() {
        return $this->hasMany('App\speakers','event_id');
}

}
