<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankQuestion extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function quiz()
    {
        return $this->belongsTo(quiz::class, 'quiz_id');
    }
    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }
}
