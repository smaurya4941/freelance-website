<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonialController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Public Blog Routes
Route::get('/sitemap.xml', [\App\Http\Controllers\SitemapController::class, 'index'])->name('sitemap');
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/category/{slug}', [\App\Http\Controllers\BlogController::class, 'category'])->name('blog.category');
Route::get('/blog/{slug}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');

// Public SEO Services Pages
Route::get('/services/laravel-development', function() { return view('pages.services.laravel'); })->name('services.laravel');
Route::get('/services/crm-development', function() { return view('pages.services.crm'); })->name('services.crm');
Route::get('/services/erp-development', function() { return view('pages.services.erp'); })->name('services.erp');
Route::get('/services/business-website-development', function() { return view('pages.services.business-website'); })->name('services.business-website');
Route::get('/services/school-management-software', function() { return view('pages.services.school-management'); })->name('services.school-management');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/{slug}', [PageController::class, 'portfolioDetails'])->name('portfolio.details');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/project-estimator', [PageController::class, 'estimator'])->name('estimator');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials.index');
Route::post('/contact/submit', [LeadController::class, 'store'])->name('contact.submit');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    
    // Leads Management
    Route::get('/admin/leads', [LeadController::class, 'index'])->name('admin.leads.index');
    Route::get('/admin/leads/pipeline', [LeadController::class, 'pipeline'])->name('admin.leads.pipeline');
    Route::get('/admin/leads/{lead}', [LeadController::class, 'show'])->name('admin.leads.show');
    Route::patch('/admin/leads/{lead}/status', [LeadController::class, 'updateStatus'])->name('admin.leads.update-status');
    Route::post('/admin/leads/{lead}/notes', [LeadController::class, 'storeNote'])->name('admin.leads.notes.store');
    
    // Testimonials
    Route::resource('/admin/testimonials', TestimonialController::class, ['as' => 'admin']);
    Route::patch('/admin/testimonials/{testimonial}/toggle', [TestimonialController::class, 'toggle'])->name('admin.testimonials.toggle');

    // Blog Management
    Route::resource('admin/blog/categories', \App\Http\Controllers\Admin\BlogCategoryController::class)->names([
        'index' => 'admin.blog.categories.index',
        'create' => 'admin.blog.categories.create',
        'store' => 'admin.blog.categories.store',
        'edit' => 'admin.blog.categories.edit',
        'update' => 'admin.blog.categories.update',
        'destroy' => 'admin.blog.categories.destroy',
    ])->except(['show']);

    Route::resource('admin/blog/posts', \App\Http\Controllers\Admin\BlogPostController::class)->names([
        'index' => 'admin.blog.posts.index',
        'create' => 'admin.blog.posts.create',
        'store' => 'admin.blog.posts.store',
        'edit' => 'admin.blog.posts.edit',
        'update' => 'admin.blog.posts.update',
        'destroy' => 'admin.blog.posts.destroy',
    ]);
    
    // File Management
    Route::get('/admin/files', [App\Http\Controllers\FileController::class, 'index'])->name('admin.files.index');
    Route::get('/admin/files/{file}/download', [App\Http\Controllers\FileController::class, 'download'])->name('admin.files.download');
    Route::patch('/admin/files/{file}/category', [App\Http\Controllers\FileController::class, 'updateCategory'])->name('admin.files.update-category');

    // Profile Management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
