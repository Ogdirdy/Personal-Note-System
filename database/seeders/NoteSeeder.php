<?php

namespace Database\Seeders;

use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notes')->insert([
            [
                'course_name' => 'Database Management Systems 1',
                'content' => 'Assignment due at 11:59 tonight',
                
            ],
            [
                'course_name' => 'SWEN On a Large Scale',
                'content' => 'This class SUCKS! Lol I am just playing',
                
            ]
        ]);
    }
}
