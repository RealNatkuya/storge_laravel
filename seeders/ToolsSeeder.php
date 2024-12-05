<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tools')->insert([
            ['tls_name' => 'PHP'],
            ['tls_name' => 'MariaDB'],
            ['tls_name' => 'Laravel'],
            ['tls_name' => 'Next.js'],
            ['tls_name' => 'React'],
            ['tls_name' => 'Flutter'],
            ['tls_name' => 'Firebase'],
        ]);
    }
}
