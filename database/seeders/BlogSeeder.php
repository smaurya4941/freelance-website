<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::first() ?? User::factory()->create(['name' => 'Sachin Maurya']);

        $categories = [
            ['name' => 'Web Development', 'slug' => 'web-development'],
            ['name' => 'Business Growth', 'slug' => 'business-growth'],
            ['name' => 'Software Costs', 'slug' => 'software-costs'],
            ['name' => 'Tech Stacks', 'slug' => 'tech-stacks'],
            ['name' => 'SEO', 'slug' => 'seo'],
        ];

        foreach ($categories as $cat) {
            BlogCategory::firstOrCreate(['slug' => $cat['slug']], $cat);
        }

        $posts = [
            [
                'title' => 'Laravel vs MERN for Business Applications',
                'category_slug' => 'tech-stacks',
                'excerpt' => 'Which technology stack is best for your custom business application? We break down the differences between Laravel and the MERN stack.',
                'content' => '<h2>Introduction</h2><p>Choosing the right tech stack for your business application is critical. Laravel offers a robust PHP framework with incredible ecosystem tools, while MERN provides a full JavaScript environment. For most enterprise applications requiring complex relationships and high security out-of-the-box, Laravel remains the undisputed king.</p><h2>Why Laravel?</h2><p>Laravel provides built-in authentication, ORM (Eloquent), caching, and queues. It saves thousands of dollars in development time.</p>',
            ],
            [
                'title' => 'Cost of Building a School Management System',
                'category_slug' => 'software-costs',
                'excerpt' => 'Understanding the true cost of developing a custom school management system compared to SaaS subscriptions.',
                'content' => '<h2>SaaS vs Custom Build</h2><p>Many schools start with off-the-shelf software, paying monthly per-student fees. As the school grows, this becomes incredibly expensive. A custom school management system requires an upfront investment (typically between $10,000 to $30,000 depending on features) but costs virtually nothing to maintain year over year.</p><h2>Features that affect cost</h2><ul><li>Automated Attendance</li><li>Fee Management Gateway</li><li>Parent Portals</li></ul>',
            ],
            [
                'title' => 'Why Every Business Needs a Website in 2026',
                'category_slug' => 'business-growth',
                'excerpt' => 'In 2026, a website is no longer a luxury. It is your 24/7 salesperson. Learn why skipping a website is costing you money.',
                'content' => '<h2>The Digital Storefront</h2><p>Consumer behavior has shifted permanently. 80% of consumers research a business online before making a purchase. Without a professional website, you lose instant credibility.</p><h2>Lead Generation</h2><p>A good website acts as a lead magnet. Using strategic forms and clear calls to action, your website works while you sleep.</p>',
            ],
            [
                'title' => 'CRM vs ERP Explained',
                'category_slug' => 'tech-stacks',
                'excerpt' => 'Confused about the difference between CRM and ERP software? Here is a simple breakdown of what they do and which one you need.',
                'content' => '<h2>What is a CRM?</h2><p>Customer Relationship Management (CRM) focuses on the front-end of your business: sales, marketing, and customer service. It tracks leads and communications.</p><h2>What is an ERP?</h2><p>Enterprise Resource Planning (ERP) connects the back-end: finance, HR, inventory, and supply chain. An ERP runs the core operations of the company.</p><h2>Do you need both?</h2><p>Yes. Many modern businesses integrate their CRM directly into their ERP for a unified view.</p>',
            ],
            [
                'title' => 'How Much Does Custom Software Cost?',
                'category_slug' => 'software-costs',
                'excerpt' => 'A transparent look into custom software pricing, what drives development costs, and how to budget for your next project.',
                'content' => '<h2>The "It Depends" Answer</h2><p>Software cost is determined by complexity, integrations, and timeline. A simple internal portal might cost $5,000, while a full enterprise ERP can exceed $100,000.</p><h2>Phased Approach</h2><p>We recommend starting with an MVP (Minimum Viable Product). This keeps initial costs low and allows you to test the software with real users before investing heavily in advanced features.</p>',
            ],
            [
                'title' => 'Benefits of Admin Dashboards',
                'category_slug' => 'business-growth',
                'excerpt' => 'Stop managing your business from spreadsheets. Discover how a custom admin dashboard centralizes your operations.',
                'content' => '<h2>Data at a Glance</h2><p>A good dashboard provides immediate answers. How many sales today? Which leads need follow-up? Are there pending approvals? Visualizing this data saves managers hours every week.</p>',
            ],
            [
                'title' => 'Common Website Mistakes Businesses Make',
                'category_slug' => 'web-development',
                'excerpt' => 'Are you making these costly website mistakes? Learn what to avoid when designing or redesigning your corporate site.',
                'content' => '<h2>1. Lack of Clear CTA</h2><p>If users don’t know what to do next, they will leave. Every page needs a clear Call to Action.</p><h2>2. Slow Load Times</h2><p>A 1-second delay in load time can result in a 7% reduction in conversions. Optimize your images and use caching.</p>',
            ],
            [
                'title' => 'SEO Basics for Local Businesses',
                'category_slug' => 'seo',
                'excerpt' => 'A beginner’s guide to local SEO. How to rank higher on Google Maps and attract more customers in your city.',
                'content' => '<h2>Google Business Profile</h2><p>Claiming and optimizing your Google Business profile is step one. Ensure your NAP (Name, Address, Phone) is consistent across the web.</p><h2>Local Content</h2><p>Write blog posts specific to your service area. Target keywords like "Plumber in [City Name]".</p>',
            ],
            [
                'title' => 'Why Fast Hosting Matters for SEO',
                'category_slug' => 'seo',
                'excerpt' => 'Google uses page speed as a ranking factor. Learn why your cheap $3/month hosting is actually costing you thousands in lost traffic.',
                'content' => '<h2>Core Web Vitals</h2><p>Google’s Core Web Vitals measure loading performance, interactivity, and visual stability. Slow hosting directly hurts your LCP (Largest Contentful Paint) score, dropping your rankings.</p>',
            ],
            [
                'title' => 'Building Scalable APIs with Laravel',
                'category_slug' => 'web-development',
                'excerpt' => 'Best practices for designing and deploying RESTful APIs using the Laravel framework.',
                'content' => '<h2>API Resources</h2><p>Use Laravel API Resources to transform your Eloquent models into JSON. This provides a consistent structure and hides sensitive data from the frontend.</p><h2>Versioning</h2><p>Always version your APIs (e.g., /api/v1/users) so you can make breaking changes in the future without disrupting current mobile apps or third-party integrations.</p>',
            ],
        ];

        foreach ($posts as $postData) {
            $cat = BlogCategory::where('slug', $postData['category_slug'])->first();
            
            $slug = Str::slug($postData['title']);
            
            BlogPost::firstOrCreate(
                ['slug' => $slug],
                [
                    'blog_category_id' => $cat->id,
                    'author_id' => $admin->id,
                    'title' => $postData['title'],
                    'excerpt' => $postData['excerpt'],
                    'content' => $postData['content'],
                    'meta_description' => $postData['excerpt'],
                    'status' => 'Published',
                    'published_at' => now()->subDays(rand(1, 30)),
                ]
            );
        }
    }
}
