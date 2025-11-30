<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Certificate;

class CertificateSeeder extends Seeder
{
    public function run(): void
    {
        $certificates = [
            [
                'title' => 'Web Development Certificate',
                'issuer' => 'Dicoding Indonesia',
                'year' => 2024,
                'description' => 'Completed full-stack web development course with final project',
                'icon' => '🏅'
            ],
            [
                'title' => 'UI/UX Design Bootcamp',
                'issuer' => 'BuildWithAngga',
                'year' => 2023,
                'description' => 'Intensive bootcamp covering design principles and prototyping',
                'icon' => '🏅'
            ],
            [
                'title' => 'Laravel Fundamentals',
                'issuer' => 'Udemy',
                'year' => 2024,
                'description' => 'Mastered Laravel framework for building modern web applications',
                'icon' => '🏅'
            ],
            [
                'title' => 'Hackathon Winner',
                'issuer' => 'Tech Competition 2024',
                'year' => 2024,
                'description' => '1st place in web development category',
                'icon' => '🏆'
            ],
        ];

        foreach ($certificates as $certificate) {
            Certificate::create($certificate);
        }
    }
}