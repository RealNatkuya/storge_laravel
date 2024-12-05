<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Project_typeSeeder extends Seeder
{
    /** Run the database seeds.*/

  public function run(): void
  {
      DB::table('Project_type')->insert([
          ['pjt_name' => 'CC : Cloud Computing'],
          ['pjt_name' => 'CE : Computer Education'],
          ['pjt_name' => 'CI : Computer Intelligence'],
          ['pjt_name' => 'CSN : Computer System Network'],
          ['pjt_name' => 'DSA : Data Science and Analytics'],
          ['pjt_name' => 'GIS : Geographic Information System'],
          ['pjt_name' => 'IoT : Internet of Things'],
          ['pjt_name' => 'IT : Information Technology'],
          ['pjt_name' => 'KDM : Knowledge and Data Management'],
          ['pjt_name' => 'MCG : Multimedia, Computer Graphics'],
          ['pjt_name' => 'SE : Software Engineer'],
          ['pjt_name' => 'i-AGR : Innovation in Agriculture'],
          ['pjt_name' => 'i-DLF : Innovation in Daily Life'],
          ['pjt_name' => 'i-ENP : Innovation in Entrepreneurship'],
          ['pjt_name' => 'i-OTH : Others'],
      ]);

  }

}
