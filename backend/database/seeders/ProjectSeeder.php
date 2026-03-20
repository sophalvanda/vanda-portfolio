<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('projects')->insert([
            [
                'title' => 'Oracle PDB Recovery Project',
                'description' => 'Successful point-in-time recovery of a mission-critical Pluggable Database.',
                'tags' => json_encode(['Oracle 19c', 'RMAN', 'PDB']),
                'created_at' => now(),
            ],
            [
                'title' => 'Automation Dashboard',
                'description' => 'Built a Laravel-based monitoring tool for DB clusters.',
                'tags' => json_encode(['Laravel', 'Vue.js', 'MySQL']),
                'created_at' => now(),
            ]
        ]);
    }
}
