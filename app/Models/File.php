<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $casts = [
        'file' => 'array',
    ];

    protected $fillable = [
        'path',
        'filename',
        'lesson_id',
        'homework_id'
    ];

    public function getUrlAttribute()
    {
        return Storage::url($this->path);
    }
}
