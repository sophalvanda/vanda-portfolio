<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void 
    {
        $categories = [
            ['name' => 'Database Administration', 'slug' => 'dba', 'type' => 'skill'],
            ['name' => 'Cloud Infrastructure', 'slug' => 'cloud', 'type' => 'skill'],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::updateOrCreate(
                ['slug' => $category['slug']], // Check if slug exists
                $category // If not, create; if yes, update
            );
        }
    }
}
