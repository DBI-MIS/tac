<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CocokingController;
use App\Http\Controllers\GradFeaturedController;
use App\Http\Controllers\HealthInfoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JuvPageController;
use App\Http\Controllers\NewsArticleController;
use App\Http\Controllers\OrganicProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SupercocoController;
use App\Http\Controllers\TicaFeaturedController;
use App\Livewire\CreateContact;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');

Route::get('/', HomeController::class)->name('home');

Route::get('/about', AboutController::class)->name('about');

Route::get('/health-info', HealthInfoController::class)->name('health-info');

Route::get('/supercoco', SupercocoController::class)->name('supercoco');

Route::get('/cocoking', CocokingController::class)->name('cocoking');
Route::get('/juv', JuvPageController::class)->name('juv');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{project:slug}', [ProjectController::class, 'show'])->name('projects.show');
// Route::get('/project/grad', [ProjectController::class, 'grad'])->name('projects.grad');
Route::get('/project/tica/{category?}', [ProjectController::class, 'tica'])->name('projects.tica');

Route::get('/project/grad/{category?}', [ProjectController::class, 'grad'])->name('projects.grad');
// Route::get('/project/grad', [ProjectController::class, 'grad'])->name('projects.grad');
// Route::get('/project/grad/{category?}', [ProjectController::class, 'grad'])->name('projects.grad');
Route::get('project/grad/create', CreateContact::class);
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/grad',GradFeaturedController::class)->name('gradProducts');
Route::get('/product/tica',TicaFeaturedController::class)->name('ticaProducts');
Route::get('/products/{product:slug}', [ProductController::class, 'show'])->name('products.show');
// Route::get('/products/{product:slug}', [ProductController::class, 'show'])->name('organicproducts.show');
Route::get('/organicproducts/{organicproduct:slug}', [OrganicProductController::class, 'show'])->name('organicproducts.show');
Route::get('/organicproducts', [OrganicProductController::class, 'index'])->name('organicproducts.index');

Route::get('/newsarticles', [NewsArticleController::class, 'index'])->name('newsarticles.index');
Route::get('/newsarticles/{newsarticle:slug}', [NewsArticleController::class, 'show'])->name('newsarticles.show');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

// require __DIR__.'/auth.php';
