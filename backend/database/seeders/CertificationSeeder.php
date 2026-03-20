<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('certifications')->insert([
            ['name' => 'Oracle Certified Professional (OCP)', 'issuer' => 'ORACLE', 'icon' => 'mdi-check-decagram-outline', 'created_at' => now()],
            ['name' => 'Autonomous Database Cloud Professional', 'issuer' => 'ORACLE', 'icon' => 'mdi-cloud-check-outline', 'created_at' => now()],
            ['name' => 'AWS Certified Database - Specialty', 'issuer' => 'AMAZON WEB SERVICES', 'icon' => 'mdi-medal-outline', 'created_at' => now()],
        ]);
    }
}
