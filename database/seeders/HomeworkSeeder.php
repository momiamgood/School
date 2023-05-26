<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomeworkSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('homework')->insert([
            'disc' => Str::random(50),
            'lesson_id' => Lesson::all('id')->random()->id,
            'user_id' => User::all('id')->random()->id,
        ]);
    }

}
