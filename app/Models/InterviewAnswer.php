<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InterviewAnswer extends Model
{
    protected $table = 'interview_answers';

    protected $fillable = [
        'question1',
        'question2',
        'question3',
        'question4',
        'question5',
        'question6',
        'question7',
        'question8',
        'question9',
    ];
}