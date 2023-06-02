<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    public $timestamps = false;


    public function gethomeworksFiles() {
        return $this->hasMany(File::class);
    }
    public function UserHomework()
    {
        return User::Find($this->user_id);
    }
    use HasFactory;
}
