<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            TechnologySeeder::class,
            ProjectSeeder::class, // Must be after Category/Tech
            SkillSeeder::class,
            ExperienceSeeder::class,
            CertificationSeeder::class,
            SiteSettingSeeder::class,
        ]);

        // Create Admin User for testing
        \App\Models\User::factory()->create([
            'name' => 'Admin Vanda',
            'email' => 'admin@example.com',
            'password' => bcrypt('password123'),
            'role' => 'admin',
        ]);
    }
}
