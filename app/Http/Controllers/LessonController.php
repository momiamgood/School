<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;


class LessonController extends Controller
{
    public function hws(){
      var_dump((new Lesson())->getAllLessonHomeworks());
    }
}
