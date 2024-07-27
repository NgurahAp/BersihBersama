<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Blog;
use App\Models\Event;

Route::get('/', function () {
    $event = Event::where('status', 'disetujui')->latest()->take(2)->get();
    $blog =
        Blog::latest()->take(2)->get();
    return view('welcome', ['event' => $event, 'blog' => $blog]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin'])->name('admin.dashboard');

// Admin tambah Event
Route::get('admin/event/addEvent', [EventController::class, 'addEvent'])->name('event.add');
Route::post('admin/saveEvent', [EventController::class, 'saveEvent'])->name('event.save');

// Admin tambah Blog
Route::get('admin/blog/addBlog', [BlogController::class, 'addBlog'])->name('blog.add');
Route::post('admin/saveBlog', [BlogController::class, 'saveBlog'])->name('blog.save');
