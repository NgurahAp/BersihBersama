<?php

use App\Http\Controllers\AduanController;
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

// Admin Event
Route::get('admin/event/index', [EventController::class, 'index'])->name('event.index');
Route::get('admin/event/detailEvent/{id}', [EventController::class, 'detailEvent'])->name('event.detail');
// Add
Route::get('admin/event/addEvent', [EventController::class, 'addEvent'])->name('event.add');
Route::post('admin/saveEvent', [EventController::class, 'saveEvent'])->name('event.save');
// Edit
Route::get('admin/event/editEvent/{id}', [EventController::class, 'editEvent'])->name('event.edit');
Route::put('admin/event/updateEvent/{id}', [EventController::class, 'updateEvent'])->name('event.update');
// Delete
Route::delete('admin/event/deleteEvent/{id}', [EventController::class, 'deleteEvent'])->name('event.delete');



//  Admin Aduan
Route::get('admin/aduan/index', [AduanController::class, 'index'])->name('aduan.index');
Route::get('admin/aduan/detailAduan/{id}', [AduanController::class, 'detailAduan'])->name('aduan.detail');
Route::get('admin/aduan/editAduan/{id}', [AduanController::class, 'editAduan'])->name('aduan.edit');
Route::put('admin/aduan/updateAduan/{id}', [AduanController::class, 'updateAduan'])->name('aduan.update');
Route::delete('admin/aduan/deleteAduan/{id}', [AduanController::class, 'deleteAduan'])->name('aduan.delete');

// Admin Blog
Route::get('admin/blog/index', [BlogController::class, 'index'])->name('blog.index');
Route::get('admin/blog/detailBlog/{id}', [BlogController::class, 'detailBlog'])->name('blog.detail');
Route::get('admin/blog/addBlog', [BlogController::class, 'addBlog'])->name('blog.add');
Route::post('admin/saveBlog', [BlogController::class, 'saveBlog'])->name('blog.save');
