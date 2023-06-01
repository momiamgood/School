<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeworkController extends Controller
{

    public function index(string $id, Request $request): View
    {
        return view('homeworks.hw_list', [
                'homeworks'=> Homework::where('lesson_id', $id)->get(),
                'id' => $id,
            ]

        );
    }

    public function show(string $hwid, Request $request): View
    {
        return view('homeworks.view', [
                'homework'=> Homework::findOrFail($hwid),
                'file_list'=> Homework::findOrFail($hwid)->gethomeworksFiles,
                'user' => User::findOrFail(Homework::findOrFail($hwid)->user_id),

            ]

        );
    }
}
