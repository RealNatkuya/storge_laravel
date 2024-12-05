<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lecturer')->insert([
            ['ltr_fname' => 'ทิพย์วรรณ','ltr_lname' => 'ฟูเฟื่อง','ltr_ttl_id' => '2'],
            ['ltr_fname' => 'อนุสรณ์','ltr_lname' => 'เจริญนาน','ltr_ttl_id' => '1'],
            ['ltr_fname' => 'วันดี','ltr_lname' => 'โชคช่วยพัฒนากิจ','ltr_ttl_id' => '1'],
            ['ltr_fname' => 'นิทัศน์','ltr_lname' => 'นิลฉวี','ltr_ttl_id' => '1'],
            ['ltr_fname' => 'สาธิต','ltr_lname' => 'สุวรรณเวช','ltr_ttl_id' => '2'],
            ['ltr_fname' => 'ขนิษฐา','ltr_lname' => 'สิทธิเทียมจันทร์','ltr_ttl_id' => '2'],
        ]);
    }
}
