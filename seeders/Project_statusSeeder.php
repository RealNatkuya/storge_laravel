<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Project_statusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('project_status')->insert([
            ['pjs_name' => 'เสนอหัวข้อ'],
            ['pjs_name' => 'อาจารย์ที่ปรึกษารับรองหัวข้อ'],
            ['pjs_name' => 'หัวข้อโครงงานผ่านการพิจารณา'],
            ['pjs_name' => 'หัวข้อโครงงานไม่ผ่านการพิจารณา'],
            ['pjs_name' => 'ขึ้นสอบโครงงงาน'],
            ['pjs_name' => 'ผ่านการสอบโครงงาน'],
            ['pjs_name' => 'ไม่ผ่านการสอบโครงงาน'],
        ]);
    }
}
