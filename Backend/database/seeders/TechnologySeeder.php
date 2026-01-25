<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $techs = [
            ['name' => 'Oracle 19c', 'icon' => 'simple-icons:oracle'],
            ['name' => 'PostgreSQL', 'icon' => 'simple-icons:postgresql'],
            ['name' => 'MySQL', 'icon' => 'simple-icons:mysql'],
            ['name' => 'Docker', 'icon' => 'simple-icons:docker'],
            ['name' => 'Ansible', 'icon' => 'simple-icons:ansible'],
        ];
        foreach ($techs as $t) { \App\Models\Technology::create($t); }
    }
}
