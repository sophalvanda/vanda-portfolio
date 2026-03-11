<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('tools')->insert([
            ['name' => 'Oracle', 'icon' => 'mdi-database', 'created_at' => now()],
            ['name' => 'RMAN', 'icon' => 'mdi-refresh', 'created_at' => now()],
            ['name' => 'Secure Backup', 'icon' => 'mdi-shield-lock', 'created_at' => now()],
            ['name' => 'SQL Developer', 'icon' => 'mdi-console', 'created_at' => now()],
            ['name' => 'Linux/Bash', 'icon' => 'mdi-terminal', 'created_at' => now()],
            ['name' => 'Python', 'icon' => 'mdi-language-python', 'created_at' => now()],
        ]);
    }
}
