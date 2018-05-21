<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question', 'subject_id', 'type', 'answer1', 'answer2', 'answer3', 'answer4', 'marks', 'level', 'status',
    ];

    public function getCreatedAtAttribute($value)
    {
        return date('d M Y H:i:s', strtotime($value));
    }

    public function getStatusAttribute($value)
    {
        return $value ? 'Active' : 'In-Active';
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
