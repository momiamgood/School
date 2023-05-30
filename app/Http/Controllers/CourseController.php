<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{


    public function index(): View
    {
        return view('course.index', [
            'courses' => Course::all(),
        ]);
    }

    public function show(string $id): View
    {
        return view('course.profile', [
            'course' => Course::findOrFail($id),
            'lessons' => Course::findOrFail($id)->getAllLesson,
            'courses' => Course::all(),
        ]);
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $course = new Course();
            $course->name = $request->input('name');

            if ($request->hasFile('img')) {
                $filenameWithExt = $request->file('img')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extention = $request->file('img')->getClientOriginalExtension();
                $fileNameToStore = "img/" . $filename . "_" . time() . "." . $extention;
                $path = $request->file('img')->storeAs('public', $fileNameToStore);
            }

            $course->img = $path;
            $course->save();
            return redirect()->route('courses');
        } else
            return view('course.create', ['courses' => Course::all()]);
    }
}
