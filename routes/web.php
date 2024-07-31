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
    $blog = Blog::latest()->take(2)->get();
    return view('welcome', ['title' => 'BersihBersama', 'event' => $event, 'blog' => $blog]);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// User
Route::get('/user/dashboard', function () {
    $event = Event::where('status', 'disetujui')->latest()->take(2)->get();
    $blog = Blog::latest()->take(2)->get();
    return view('user.dashboard', ['title' => 'BersihBersama', 'event' => $event, 'blog' => $blog]);
})->middleware(['auth', 'verified'])->name('dashboard');
// Event
Route::get('user/event', [EventController::class, 'indexUser'])->name('user.event');
Route::get('user/detailEventUser/{id}', [EventController::class, 'detailEventUser'])->name('user.detailEvent');
// Ikuti Kegiatan
Route::post('user/event/join/{id}', [EventController::class, 'joinEvent'])->name('user.event.join');

// Admin
Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin'])->name('admin.dashboard');
// Event
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

// Aduan
Route::get('admin/aduan/index', [AduanController::class, 'index'])->name('aduan.index');
Route::get('admin/aduan/detailAduan/{id}', [AduanController::class, 'detailAduan'])->name('aduan.detail');
// Edit
Route::get('admin/aduan/editAduan/{id}', [AduanController::class, 'editAduan'])->name('aduan.edit');
Route::put('admin/aduan/updateAduan/{id}', [AduanController::class, 'updateAduan'])->name('aduan.update');
// Delete
Route::delete('admin/aduan/deleteAduan/{id}', [AduanController::class, 'deleteAduan'])->name('aduan.delete');

// Blog
Route::get('admin/blog/index', [BlogController::class, 'index'])->name('blog.index');
Route::get('admin/blog/detailBlog/{id}', [BlogController::class, 'detailBlog'])->name('blog.detail');
// Add
Route::get('admin/blog/addBlog', [BlogController::class, 'addBlog'])->name('blog.add');
Route::post('admin/saveBlog', [BlogController::class, 'saveBlog'])->name('blog.save');
// Edit
Route::get('admin/blog/editBlog/{id}', [BlogController::class, 'editBlog'])->name('blog.edit');
Route::put('admin/blog/updateBlog/{id}', [BlogController::class, 'updateBlog'])->name('blog.update');
// Delete
Route::delete('admin/blog/deleteBlog/{id}', [BlogController::class, 'deleteBlog'])->name('blog.delete');
