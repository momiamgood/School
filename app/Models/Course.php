<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
    ];

    /*public function lessons(){
        return Lesson::all()-where()
    }*/
    public function getAllLesson()
    {
        return $this->hasMany(Lesson::class);
    }





}
