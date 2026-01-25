<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        \App\Models\Certification::create([
            'title' => 'Oracle Database Administration Certified Professional',
            'issuer' => 'Oracle',
            'issue_date' => '2022-05-20',
            // Change 'verify_url' to 'verification_url' here
            'verification_url' => 'https://your-cert-link.com', 
        ]);
    }
}
