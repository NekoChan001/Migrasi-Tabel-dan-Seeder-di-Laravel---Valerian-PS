<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    public function run()
    {
        DB::table('students')->insert([
            ['name' => 'Neko Chan', 'age' => 20, 'classroom' => 'PTI A'],
            ['name' => 'Ryu ken', 'age' => 22, 'classroom' => 'PTI A'],
            ['name' => 'Valerian ps', 'age' => 21, 'classroom' => 'PTI B'],
            ['name' => 'Rian Permana', 'age' => 23, 'classroom' => 'PTI B'],
            ['name' => 'Yanto Sugianto', 'age' => 19, 'classroom' => 'PTI B'],
        ]);
    }
}

