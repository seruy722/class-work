<?php

use Illuminate\Database\Seeder;
use App\Models\Users;

class SubjectsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        for ($i = 0; $i < 50; $i++) {
            (new Users)->insert([
                'name' => str_random(10),
                'teacher_fio' => str_random(10) . '@gmail.com',
                'rating' => rand(0, 200),
                'student_id' => rand(50, 200)
            ]);
        }
    }

}
