<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function portfolio()
    {
        // For now, static list or just render the view. We can use an array of projects.
        $projects = [
            [
                'title' => 'School Management System',
                'description' => 'A comprehensive platform for schools to manage students, fees, and attendance.',
                'industry' => 'Education',
                'technology' => 'Laravel, Vue.js',
                'result' => 'Reduced administrative work by 40%',
                'slug' => 'school-management-system',
                'image' => 'https://images.unsplash.com/photo-1503676260728-1c00da094a0b?q=80&w=600&auto=format&fit=crop'
            ],
            [
                'title' => 'Inventory Management System',
                'description' => 'A scalable system for tracking inventory across multiple warehouses.',
                'industry' => 'Retail',
                'technology' => 'Laravel, React',
                'result' => 'Improved stock accuracy to 99.9%',
                'slug' => 'inventory-management-system',
                'image' => 'https://images.unsplash.com/photo-1553413077-190dd305871c?q=80&w=600&auto=format&fit=crop'
            ],
            [
                'title' => 'Smart Attendance System',
                'description' => 'Biometric and RFID-based attendance tracking for enterprises.',
                'industry' => 'Corporate',
                'technology' => 'Laravel, Python (Hardware Integration)',
                'result' => 'Automated payroll calculations',
                'slug' => 'smart-attendance-system',
                'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=600&auto=format&fit=crop'
            ],
            [
                'title' => 'Blood Donation Matcher',
                'description' => 'An emergency platform connecting donors with patients in real-time.',
                'industry' => 'Healthcare',
                'technology' => 'Laravel, Pusher (WebSockets)',
                'result' => 'Saved 500+ lives in year one',
                'slug' => 'blood-donation-matcher',
                'image' => 'https://images.unsplash.com/photo-1536856136534-bb679c52a9aa?q=80&w=600&auto=format&fit=crop'
            ],
            [
                'title' => 'AI Resume Builder',
                'description' => 'A SaaS platform that uses AI to generate tailored resumes.',
                'industry' => 'SaaS',
                'technology' => 'Laravel, OpenAI API',
                'result' => '10,000+ active monthly users',
                'slug' => 'ai-resume-builder',
                'image' => 'https://images.unsplash.com/photo-1586281380349-632531db7ed4?q=80&w=600&auto=format&fit=crop'
            ],
            [
                'title' => 'Dynamic Pricing System',
                'description' => 'An algorithm-driven pricing engine for e-commerce stores.',
                'industry' => 'E-Commerce',
                'technology' => 'Laravel, Python',
                'result' => 'Increased revenue margins by 15%',
                'slug' => 'dynamic-pricing-system',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=600&auto=format&fit=crop'
            ],
        ];

        return view('pages.portfolio', compact('projects'));
    }

    public function portfolioDetails($slug)
    {
        // Mock data for the specific project
        $project = [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'slug' => $slug,
            'client' => 'Confidential',
            'duration' => '3 Months',
            'role' => 'Lead Developer',
            'industry' => 'Education',
            'overview' => 'Before this system, school management was done manually. Attendance tracking was slow, fee management was difficult, and data was scattered across physical ledgers and disparate Excel sheets.',
            'challenge' => 'The client had disparate systems that were manually synced, causing data discrepancies and huge administrative overhead. They needed a centralized digital platform.',
            'solution' => 'We developed a comprehensive, cloud-based School Management System. It acts as a single source of truth for administrators, teachers, and parents.',
            'features' => [
                'Student Management' => 'Complete digital profiles for every student.',
                'Attendance' => 'Real-time biometric and manual attendance tracking.',
                'Fee Tracking' => 'Automated invoice generation and payment gateways.',
                'Reports' => 'Customizable performance and financial reporting.',
                'Notifications' => 'Automated SMS/Email alerts for parents.',
                'Admin Dashboard' => 'Centralized control panel for management.'
            ],
            'technologies' => [
                'Laravel' => 'Chosen for its robust backend architecture and security features.',
                'Vue.js' => 'Used to create a dynamic, single-page application experience for the dashboard.',
                'MySQL' => 'Selected for reliable, relational data storage.',
                'Tailwind CSS' => 'Implemented for rapid, consistent UI development.'
            ],
            'results' => [
                'Faster Operations (40% reduction in admin time)',
                'Better Data Management and accuracy',
                'Reduced Manual Work across all departments',
                'Improved User Experience for parents and staff'
            ],
            'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1200&auto=format&fit=crop',
            'screenshots' => [
                'desktop' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800&auto=format&fit=crop',
                'tablet' => 'https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?q=80&w=800&auto=format&fit=crop',
                'mobile' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=800&auto=format&fit=crop'
            ]
        ];

        $relatedProjects = [
            [
                'title' => 'Inventory Management System',
                'industry' => 'Retail',
                'slug' => 'inventory-management-system',
                'image' => 'https://images.unsplash.com/photo-1553413077-190dd305871c?q=80&w=600&auto=format&fit=crop'
            ],
            [
                'title' => 'Smart Attendance System',
                'industry' => 'Corporate',
                'slug' => 'smart-attendance-system',
                'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=600&auto=format&fit=crop'
            ],
            [
                'title' => 'AI Resume Builder',
                'industry' => 'SaaS',
                'slug' => 'ai-resume-builder',
                'image' => 'https://images.unsplash.com/photo-1586281380349-632531db7ed4?q=80&w=600&auto=format&fit=crop'
            ]
        ];
        
        return view('pages.portfolio-details', compact('project', 'relatedProjects'));
    }

    public function estimator()
    {
        return view('pages.estimator');
    }

    public function testimonials()
    {
        $page = request()->get('page', 1);
        $testimonials = \Illuminate\Support\Facades\Cache::remember('testimonials_page_' . $page, 600, function() {
            return \App\Models\Testimonial::where('is_hidden', false)
                                ->orderBy('is_featured', 'desc')
                                ->latest()
                                ->paginate(12);
        });
        return view('pages.testimonials', compact('testimonials'));
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
