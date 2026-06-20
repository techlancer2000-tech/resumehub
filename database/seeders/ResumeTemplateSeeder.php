<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResumeTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $templates = [
            [
                'name' => 'ATS Friendly',
                'slug' => 'ats-friendly',
                'blade_view' => 'ats-friendly',
                'description' => 'Simple ATS optimized resume template.',
                'is_premium' => false,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Modern Professional',
                'slug' => 'modern-professional',
                'blade_view' => 'modern-professional',
                'description' => 'Modern professional resume template.',
                'is_premium' => false,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Executive',
                'slug' => 'executive',
                'blade_view' => 'executive',
                'description' => 'Executive level resume template.',
                'is_premium' => true,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Creative Designer',
                'slug' => 'creative-designer',
                'blade_view' => 'creative-designer',
                'description' => 'Creative resume for designers.',
                'is_premium' => true,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Developer',
                'slug' => 'developer',
                'blade_view' => 'developer',
                'description' => 'Resume template for software developers.',
                'is_premium' => true,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($templates as $template) {
            \App\Models\ResumeTemplate::firstOrCreate(
                ['name' => $template['name']],
                $template
            );
        }
    }
}
