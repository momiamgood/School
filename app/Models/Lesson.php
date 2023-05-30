<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'text',
        'course_id'
    ];

    public function getAllHomeworks()
    {
        return $this->hasMany(Homework::class);
    }

    public function getLessonFiles() {
        return $this->hasMany(File::class) || 'no files';
    }
}
