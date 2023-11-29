<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    public function run()
    {
        DB::table('courses')->insert([
            ['course_name' => 'IPA', 'description' => 'deskripsi IPA'],
            ['course_name' => 'IPS', 'description' => 'deskripsi IPS'],
            ['course_name' => 'Sejarah', 'description' => 'deskripsi Sejarah'],
        ]);
    }
}
