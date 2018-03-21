<?php

use Illuminate\Database\Seeder;
use App\Subject;

class SubjectsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Subject::truncate();
        for ($i = 0; $i < 20; $i++) {
            Subject::create([
                'name' => str_random(10),
                'teacher_fio' => str_random(10) . '@gmail.com',
                'rating' => rand(0, 200),
                'student_id' => rand(50, 200)
            ]);
        }
    }

}
