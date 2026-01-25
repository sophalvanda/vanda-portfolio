<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        // 1. Fetch the category. Make sure 'ha' exists in CategorySeeder!
        $cat = \App\Models\Category::where('slug', 'ha')->first();
        
        // 2. Safety Check: If category is missing, create a default one
        if (!$cat) {
            $cat = \App\Models\Category::create([
                'name' => 'High Availability',
                'slug' => 'ha',
                'type' => 'project'
            ]);
        }

        $project = \App\Models\Project::create([
            'title' => 'Oracle Data Guard Implementation',
            'slug' => 'oracle-dataguard-ha',
            'description' => 'Configured physical standby for disaster recovery.',
            'db_type' => 'Oracle 19c',
            'challenges' => 'Network latency causing redo transport delays.',
            'solutions' => 'Optimized redo log buffer and implemented Far Sync.',
            'category_id' => $cat->id, // Now $cat is guaranteed to have an ID
            'is_published' => true,
        ]);

        // 3. Attach technologies - ensure these names exist in TechnologySeeder
        $techs = \App\Models\Technology::whereIn('name', ['Oracle 19c', 'Docker'])->pluck('id');
        $project->technologies()->attach($techs);
    }
}
