<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'client_name' => 'Sarah Jenkins',
                'company_name' => 'TechFlow Solutions',
                'designation' => 'CEO',
                'feedback' => 'Working with Sachin was an absolute game-changer. He didn\'t just build a website; he completely re-engineered our digital presence. Our new custom SaaS platform is incredibly fast, intuitive, and perfectly aligned with our business goals. The post-launch support has been exceptional.',
                'rating' => 5,
                'project_type' => 'Custom Web Application',
                'is_featured' => true,
                'date' => '2026-01-15',
                'photo' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=256&h=256&q=80'
            ],
            [
                'client_name' => 'Marcus Chen',
                'company_name' => 'EduPro Academy',
                'designation' => 'Director',
                'feedback' => 'We needed a comprehensive School Management System that could handle everything from student attendance to fee processing. The solution delivered exceeded all expectations. It reduced our administrative workload by 40% within the first month. Highly recommended for complex projects.',
                'rating' => 5,
                'project_type' => 'School Management System',
                'is_featured' => true,
                'date' => '2026-03-22',
                'photo' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=256&h=256&q=80'
            ],
            [
                'client_name' => 'Elena Rodriguez',
                'company_name' => 'Boutique Retail',
                'designation' => 'Founder',
                'feedback' => 'The e-commerce platform built for us is stunning and incredibly fast. We saw a 30% increase in our conversion rate immediately after launch. What impressed me most was the transparent communication throughout the entire development process.',
                'rating' => 5,
                'project_type' => 'E-Commerce Website',
                'is_featured' => true,
                'date' => '2025-11-05',
                'photo' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=256&h=256&q=80'
            ],
            [
                'client_name' => 'David Thompson',
                'company_name' => 'Global Logistics Inc.',
                'designation' => 'Operations Manager',
                'feedback' => 'The custom ERP system has centralized all our scattered data. It was a massive undertaking, but the development process was handled smoothly with clear milestones. A true professional.',
                'rating' => 4,
                'project_type' => 'ERP System',
                'is_featured' => false,
                'date' => '2026-04-10',
                'photo' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=256&h=256&q=80'
            ],
            [
                'client_name' => 'Jessica Wong',
                'company_name' => 'Creative Agency',
                'designation' => 'Creative Director',
                'feedback' => 'Incredible attention to detail and design aesthetics. The portfolio website built for our agency perfectly captures our brand identity while maintaining perfect Lighthouse performance scores.',
                'rating' => 5,
                'project_type' => 'Portfolio Website',
                'is_featured' => false,
                'date' => '2026-05-02',
                'photo' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=256&h=256&q=80'
            ]
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
