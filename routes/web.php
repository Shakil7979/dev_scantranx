<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

// User Routes
Route::get('/', [UserController::class, 'index'])->name('user.home');  // User homepage
Route::get('/admin', function () {
    return redirect()->route('admin.login');
});

// Admin Routes
Route::prefix('admin')->group(function () {
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



});
