<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name', 'stream_id', 'status', 'code'
    ];

    public function getCreatedAtAttribute($value) {
        return date('d M Y H:i:s', strtotime($value));
    }

    public function getStatusAttribute($value) {
        return $value ? 'Active' : 'In-Active';
    }
}
