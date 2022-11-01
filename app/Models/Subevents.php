<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subevents extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'date',
        'venue',
        'time',
        'event_id',
        'flickr',
        'bio',
        'file_path',
        'register',
        'embed'
    ];
    

    public function events() {
        return $this->belongsTo('App\events', 'id');
    }
}
