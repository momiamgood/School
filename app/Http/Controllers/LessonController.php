<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Homework;
use Illuminate\Http\Request;
use App\Models\Lesson;
use Illuminate\View\View;


class LessonController extends Controller
{
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $lesson = new Lesson();
            $lesson->name = $request->input('name');
            $lesson->text = $request->input('text');
            $lesson->course_id = $request->input('course_id');
            $lesson->save();
            return redirect()->route('courses');
        } else
            return view('lesson.create',[
            'courses' => Course::all(),
        ]);
    }
    public function show(string $id, Request $request): View
    {
        if ($request->isMethod('post')) {
            $homework = new Homework();
            $homework->disc = $request->input('disc');
            $homework->lesson_id = $request->input('lesson_id');
            $homework->user_id = $request->input('user_id');
            $homework->save();
        }
        return view('lesson.view', [
            'lesson' => Lesson::findOrFail($id),
            'hmws' => Lesson::findOrFail($id)->getAllHomeworks,
            'id'=> $id,
        ]);
    }
}
