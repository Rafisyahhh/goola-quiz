<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function quiz()
    {
        return $this->belongsTo(quiz::class, 'quiz_id');
    }
    public function bank_question()
    {
        return $this->belongsTo(BankQuestion::class, 'bank_question_id');
    }
}
