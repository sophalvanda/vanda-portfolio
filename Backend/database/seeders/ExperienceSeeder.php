<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void 
    {
        \App\Models\Experience::create([
            'company' => 'Tech Corp',
            'position' => 'Senior Database Administrator',
            'start_date' => '2020-01-01',
            'description' => 'Managing multi-terabyte Oracle and PostgreSQL clusters.',
            'tools' => ['Oracle 19c', 'PostgreSQL', 'Docker', 'Ansible'],
        ]);
    }
}
