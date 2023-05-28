<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    use HasFactory;

    public function AnswerOwner()
    {
        return $this->hasOneThrough(Homework::class, User::class);
    }
}
