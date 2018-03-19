<?php

use Illuminate\Database\Seeder;
use App\Models\Users;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call(SubjectsTableSeeder::class);
    }

}
