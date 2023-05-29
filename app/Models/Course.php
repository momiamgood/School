<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'name',
        'img'
    ];

    /*public function lessons(){
        return Lesson::all()-where()
    }*/
    public function getAllLesson()
    {
        return $this->hasMany(Lesson::class);
    }


}
