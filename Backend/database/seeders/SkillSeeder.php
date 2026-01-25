<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $cat = \App\Models\Category::where('slug', 'dba')->first();
        $skills = [
            ['name' => 'Performance Tuning', 'level' => 'Expert', 'percentage' => 95, 'category_id' => $cat->id],
            ['name' => 'SQL Optimization', 'level' => 'Advanced', 'percentage' => 88, 'category_id' => $cat->id],
        ];
        foreach ($skills as $s) { \App\Models\Skill::create($s); }
    }
}
