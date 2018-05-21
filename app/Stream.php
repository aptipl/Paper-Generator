<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    protected $fillable = [
        'name'
    ];

    public function getCreatedAtAttribute($value) 
    {
        return date('d M Y H:i:s', strtotime($value));
    }
}
