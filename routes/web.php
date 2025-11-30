<?php

use Illuminate\Support\Facades\Route;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Certificate;
use App\Models\Hobby;

// Halaman Home - Single Page (dengan data dari database)
Route::get('/', function () {
    $skills = Skill::all();
    $projects = Project::all();
    $certificates = Certificate::all();
    $hobbies = \App\Models\Hobby::with('items')->get();

    return view('home', compact('skills', 'projects', 'certificates', 'hobbies'));
});

// Halaman About
Route::get('/about', function () {
    return view('about');
});

// Halaman Skills
Route::get('/skills', function () {
    return view('skills');
});

// Halaman Portfolio
Route::get('/portfolio', function () {
    return view('portfolio');
});

// Halaman Experience
Route::get('/experience', function () {
    return view('experience');
});

// Halaman Education
Route::get('/education', function () {
    return view('education');
});

// Halaman Certificates
Route::get('/certificates', function () {
    return view('certificates');
});

// Halaman Hobbies
Route::get('/hobbies', function () {
    return view('hobbies');
});

// Halaman Contact
Route::get('/contact', function () {
    return view('contact');
});

// ========================================
// ADMIN ROUTES
// ========================================
Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard Admin
    Route::get('/', function () {
        $skillCount = Skill::count();
        $projectCount = Project::count();
        $certificateCount = Certificate::count();
        $hobbyCount = Hobby::count();
        
        return view('admin.dashboard', compact('skillCount', 'projectCount', 'certificateCount','hobbyCount'));
    })->name('dashboard');
    
    // CRUD Skills
    Route::resource('skills', \App\Http\Controllers\Admin\SkillController::class);
    
    // CRUD Projects
    Route::resource('projects', \App\Http\Controllers\Admin\ProjectController::class);
    
    // CRUD Certificates
    Route::resource('certificates', \App\Http\Controllers\Admin\CertificateController::class);
    
    // HOBBIES ROUTES (BARU!) 🚀
    // ========================================
    Route::resource('hobbies', \App\Http\Controllers\Admin\HobbyController::class);
    
    // Hobby Items Routes (nested di dalam hobby)
    Route::prefix('hobbies/{hobby}')->group(function () {
        Route::get('items', [\App\Http\Controllers\Admin\HobbyItemController::class, 'index'])
            ->name('hobby-items.index');
        Route::get('items/create', [\App\Http\Controllers\Admin\HobbyItemController::class, 'create'])
            ->name('hobby-items.create');
        Route::post('items', [\App\Http\Controllers\Admin\HobbyItemController::class, 'store'])
            ->name('hobby-items.store');
        Route::get('items/{item}/edit', [\App\Http\Controllers\Admin\HobbyItemController::class, 'edit'])
            ->name('hobby-items.edit');
        Route::put('items/{item}', [\App\Http\Controllers\Admin\HobbyItemController::class, 'update'])
            ->name('hobby-items.update');
        Route::delete('items/{item}', [\App\Http\Controllers\Admin\HobbyItemController::class, 'destroy'])
            ->name('hobby-items.destroy');
    });
});