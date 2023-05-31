<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\File;
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

            $files = [];
            if($request->hasFile('files'))
            {
                $files[] = $request->allFiles();
                foreach ($request->file('files') as $file) {
                    $model = new File();
                    $filenameWithExt = $file->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extention = $file->extension();
                    $fileNameToStore = "files/".$filename."_".time().".".$extention;
                    $path = $file->storeAs('public', $fileNameToStore);
                    $model->path = $path;
                    $model->filename = $filenameWithExt;
                    $model->lesson_id = $lesson->id;
                    $model->save();
                }
            }


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
            'file_list' => Lesson::findOrFail($id)->getLessonFiles,
        ]);
    }
}
