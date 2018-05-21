<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaperQuestions extends Model
{
    protected $fillable = [
        'question', 'type', 'answer1', 'answer2', 'answer3', 'answer4', 'marks', 'paper_id',
    ];

    public function paper()
    {
        return $this->belongsTo(Paper::class);
    }
}
