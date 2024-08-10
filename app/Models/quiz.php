<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function bank_question()
    {
        return $this->hasMany(BankQuestion::class);
    }
}
