<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactFormController;
use App\Http\Controllers\Admin\EbookDownloadController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\ResellerController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route; 

use Illuminate\Http\Request;



// Here is all route have for this application 

// User Auth Route 
Route::post('/user/registraion', [UserController::class, 'register'])->name('user.registration');
Route::post('/user/login', [UserController::class, 'login'])->name('user.login');
Route::post('/user/logout', [UserController::class, 'logout'])->name('user.logout');



// User Routes Here
Route::get('/', [UserController::class, 'index'])->name('user.home');  // User homepage
Route::get('/home-v2', [UserController::class, 'homev2'])->name('user.homev2');  // User homepage
Route::get('/about', [UserController::class, 'about'])->name('user.about'); 
Route::get('/api-integration', [UserController::class, 'api_integration'])->name('user.api.integration'); 
Route::get('/blog', [UserController::class, 'blog'])->name('user.blog'); 
Route::get('/blog/single/{id}', [UserController::class, 'blog_single'])->name('user.single.blog'); 
Route::get('/contact', [UserController::class, 'contact'])->name('user.contact'); 
Route::get('/features', [UserController::class, 'features'])->name('user.features'); 
Route::get('/hardware', [UserController::class, 'hardware'])->name('user.hardware'); 
Route::get('/job-opening', [UserController::class, 'job_opening'])->name('user.job.opening'); 
Route::get('/pricing', [UserController::class, 'pricing'])->name('user.pricing'); 
Route::get('/privecy-policy', [UserController::class, 'privecy_policy'])->name('user.privecy.policy'); 
Route::get('/quickbook-disconnect', [UserController::class, 'quickbook_disconnect'])->name('user.quickbook.disconnect'); 
Route::get('/quickbook', [UserController::class, 'quickbook'])->name('user.quickbook'); 
Route::get('/reseller', [UserController::class, 'reseller'])->name('user.reseller'); 
Route::post('/reseller/store', [ResellerController::class, 'store'])->name('reseller.store');
Route::get('/stripe', [UserController::class, 'stripe'])->name('user.stripe'); 
Route::post('/ebook/store', [EbookDownloadController::class, 'store'])->name('ebook.store');

// Website  
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Job Apply Route 
Route::post('/apply-job', [JobController::class, 'applyForJob'])->name('job.apply');
Route::get('/user-get-job-info/{id}', [JobController::class, 'job_get_info']);







// Admin Route Here   

// Route::get('/admin', [AdminController::class, 'admin_redirect']);

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.login');
    });
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.post');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');

    // Logout Route
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Job Route 
    Route::post('/job/store', [JobController::class, 'store'])->name('job.store'); 
    Route::post('/job/update/', [JobController::class, 'update'])->name('job.update'); 
    Route::get('/jobs/{id}/edit', [JobController::class, 'edit'])->name('job.edit');
    Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('job.destroy');
    
    // Route for job details page
    Route::get('/jobs/{id}', [JobController::class, 'show'])->name('job.show');

    // Blog Post 
    Route::get('/blog/show', [BlogController::class, 'show'])->name('blog.show'); 
    Route::post('/blog/post', [BlogController::class, 'post'])->name('blog.post');
    Route::get('/blog/edit/show/{id}', [BlogController::class, 'edit_show'])->name('blog.edit.show');
    Route::post('/blog/update', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

    // FAQ Route 
    Route::get('/faq/show', [FaqController::class, 'show'])->name('faq.show'); 
    Route::post('/faq/store', [FaqController::class, 'store'])->name('faq.store'); 
    Route::get('/faq/edit/{id}', [FaqController::class, 'edit_show'])->name('faq.edit.show'); 
    Route::post('/faq/update', [FaqController::class, 'update'])->name('faq.update'); 
    Route::delete('/faq/{id}', [FaqController::class, 'destroy'])->name('faq.destroy');

    // Testimonial 
    Route::get('/testimonial/show', [TestimonialController::class, 'show'])->name('testimonial.show'); 
    Route::post('/testimonials/store', [TestimonialController::class, 'store'])->name('testimonials.store');
    Route::get('/testimonials/edit/{id}', [TestimonialController::class, 'edit_show'])->name('testimonials.edit.show'); 
    Route::post('/testimonials/update', [TestimonialController::class, 'update'])->name('testimonials.update');
    Route::delete('/testimonials/{id}', [TestimonialController::class, 'destroy'])->name('testimonials.destroy'); 

    // Contact Route 
    Route::get('/contact/show', [ContactFormController::class, 'show'])->name('contact.show'); 

    // Reseller Route 
    Route::get('/reseller/show', [ResellerController::class, 'show'])->name('reseller.show'); 

    // E-book Download Route 
    Route::get('/ebook-download/show', [EbookDownloadController::class, 'show'])->name('ebook.download.show'); 



});





// time zone route 
Route::post('/set-timezone', function (Request $request) {
    $timezone = $request->input('timezone');
    session(['user_timezone' => $timezone]);
    return response()->json(['status' => 'success']);
});