<?php

namespace Database\Seeders;

use App\Models\Certification;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Tool;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call your specific seeders here, for example:
        $this->call(ExperienceSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(CertificationSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(ToolSeeder::class);
    }
}