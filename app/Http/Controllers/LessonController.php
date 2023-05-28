<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use Illuminate\View\View;


class LessonController extends Controller
{
    public function show(string $id): View
    {


        return view('lesson.view', [
            'lesson' => Lesson::findOrFail($id),
            'hmws' => Lesson::findOrFail($id)->getAllHomeworks,
        ]);
    }
}
