<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('skills')->insert([
            ['name' => 'Oracle Database', 'icon' => 'mdi-database', 'description' => 'Multi-tenant architecture (CDB/PDB), installation, and complex configuration.', 'created_at' => now()],
            ['name' => 'Backup & Recovery', 'icon' => 'mdi-history', 'description' => 'RMAN strategies and Oracle Secure Backup (OSB) for disaster recovery.', 'created_at' => now()],
            ['name' => 'Performance Tuning', 'icon' => 'mdi-speedometer', 'description' => 'Query optimization, index management, and performance diagnostics.', 'created_at' => now()],
            ['name' => 'SQL & PL/SQL', 'icon' => 'mdi-code-tags', 'description' => 'Stored procedures, triggers, and complex scripts for automation.', 'created_at' => now()],
            ['name' => 'Database Security', 'icon' => 'mdi-shield-lock-outline', 'description' => 'User management, auditing, and implementation of security patches.', 'created_at' => now()],
            ['name' => 'Linux Administration', 'icon' => 'mdi-linux', 'description' => 'OS-level optimization and shell scripting for automation.', 'created_at' => now()],
        ]);
    }
}
