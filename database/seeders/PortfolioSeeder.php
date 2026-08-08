<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Education;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Profile Data
        Profile::create([
            'name' => 'Mihindu Bandara',
            'title' => 'Software Engineering Student | Full Stack Developer',
            'about' => 'Passionate Software Engineering student with experience in building RESTful APIs, web applications using Laravel, PHP, MySQL, and modern JavaScript frameworks.',
            'email' => 'mihindu@example.com',
            'phone' => '+94712345678',
            'location' => 'Sri Lanka',
            'github_url' => 'https://github.com',
            'linkedin_url' => 'https://linkedin.com',
            'cv_url' => '/cv.pdf',
        ]);

        // 2. Skills Data
        $skills = [
            ['name' => 'Java', 'category' => 'Backend', 'percentage' => 80],
            ['name' => 'PHP', 'category' => 'Backend', 'percentage' => 85],
            ['name' => 'Laravel', 'category' => 'Framework', 'percentage' => 85],
            ['name' => 'JavaScript', 'category' => 'Frontend', 'percentage' => 75],
            ['name' => 'MySQL', 'category' => 'Database', 'percentage' => 80],
            ['name' => 'HTML & CSS', 'category' => 'Frontend', 'percentage' => 90],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }

        // 3. Projects Data
        $projects = [
            [
                'title' => 'Anonymous Police Complaint System',
                'description' => 'A web platform allowing citizens to report complaints securely and anonymously with real-time status tracking.',
                'technologies' => 'PHP, MySQL, Bootstrap, JavaScript',
                'github_link' => 'https://github.com',
                'demo_link' => null,
            ],
            [
                'title' => 'T20 World Cup Management System',
                'description' => 'Comprehensive management system to handle cricket match schedules, teams, player statistics, and live updates.',
                'technologies' => 'Java, MySQL, Swing',
                'github_link' => 'https://github.com',
                'demo_link' => null,
            ],
            [
                'title' => 'Bookstore Management System',
                'description' => 'E-commerce platform for ordering books online, inventory tracking, and sales analytics.',
                'technologies' => 'Laravel, MySQL, Tailwind CSS',
                'github_link' => 'https://github.com',
                'demo_link' => null,
            ],
            [
                'title' => 'Game Zone Management System',
                'description' => 'System designed to track gaming hours, system availability, booking slots, and billing.',
                'technologies' => 'PHP, MySQL, JavaScript',
                'github_link' => 'https://github.com',
                'demo_link' => null,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }

        // 4. Education Data
        Education::create([
            'title' => 'Higher National Diploma in Information Technology (HNDIT)',
            'institution' => 'SLIATE',
            'year' => '2023 - Present',
            'description' => 'Focused on Software Engineering, Web Development, Database Systems, and Object-Oriented Programming.',
        ]);
    }
}