<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('program')->insert([
            ['pgm_name' => 'วิทยาการคอมพิวเตอร์'],
            ['pgm_name' => 'เทคโนโลยีสารสนเทศ'],
            ['pgm_name' => 'ภูมิสารสนเทศ'],
            ['pgm_name' => 'เทคโนโลยีเครือข่ายคอมพิวเตอร์'],
            ['pgm_name' => 'วิศวกรรมคอมพิวเตอร์'],
        ]);
    }
}
