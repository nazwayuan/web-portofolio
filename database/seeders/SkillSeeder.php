<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            // Hard Skills
            ['name' => 'Word', 'icon' => '📝', 'percentage' => 90, 'category' => 'hard'],
            ['name' => 'Excel', 'icon' => '📊', 'percentage' => 85, 'category' => 'hard'],
            ['name' => 'Canva', 'icon' => '🎨', 'percentage' => 80, 'category' => 'hard'],
            ['name' => 'Java', 'icon' => '☕', 'percentage' => 75, 'category' => 'hard'],
            
            // Soft Skills
            ['name' => 'Time Management', 'icon' => '⏰', 'percentage' => 85, 'category' => 'soft'],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}