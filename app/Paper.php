<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    protected $fillable = [
        'subject_id', 'total_marks', 'header', 'pdf', 'status', 'for', 'date_time', 'instructions',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function questions()
    {
        return $this->hasOne(PaperQuestions::class);
    }

    public function getCreatedAtAttribute($value) {
        return date('d M Y H:i:s', strtotime($value));
    }

}
