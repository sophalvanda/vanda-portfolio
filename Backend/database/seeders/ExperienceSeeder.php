<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Experience;
use Carbon\Carbon;

class ExperienceSeeder extends Seeder
{
    public function run(): void {
        DB::table('experiences')->insert([
            [
                'role' => 'Senior Database Administrator',
                'company' => 'Enterprise Data Solutions',
                'period' => '2020 — Present',
                'points' => json_encode([
                    'Overseeing 50+ Oracle 19c instances across multiple data centers.',
                    'Managing backup validation routines and RMAN recovery catalog maintenance.',
                    'Orchestrating large-scale storage migrations with zero downtime.'
                ]),
                'created_at' => now(),
            ],
            [
                'role' => 'Database Administrator',
                'company' => 'TechFlow Systems',
                'period' => '2017 — 2020',
                'points' => json_encode([
                    'Conducted weekly health checks and performance bottleneck analysis.',
                    'Automated routine user management tasks using PL/SQL scripts.',
                    'Managed Linux-based Oracle installations and kernel optimizations.'
                ]),
                'created_at' => now(),
            ]
        ]);
    }
}