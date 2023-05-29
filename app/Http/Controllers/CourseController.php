<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{



    public function index(): View{
        return view('course.index', [
           'courses' => Course::all(),
        ]);
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $course = new Course();
            $course->name = $request->input('name');
            $course->save();
            return redirect()->route('courses');
        } else
            return view('course.create');
    }

    public function show(string $id): View
    {


        return view('course.profile', [
            'course' => Course::findOrFail($id),
            'lessons' => Course::findOrFail($id)->getAllLesson,
        ]);
    }
}
