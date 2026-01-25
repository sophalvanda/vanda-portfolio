<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $settings = [
            ['key' => 'site_name', 'value' => 'Vanda Portfolio', 'type' => 'text'],
            ['key' => 'linkedin', 'value' => 'https://linkedin.com/in/vanda', 'type' => 'text'],
            ['key' => 'github', 'value' => 'https://github.com/vanda', 'type' => 'text'],
            ['key' => 'profile_photo', 'value' => 'uploads/avatar.jpg', 'type' => 'file'],
        ];
        foreach ($settings as $s) { \App\Models\SiteSetting::create($s); }
    }
}
