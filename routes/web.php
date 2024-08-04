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
// Blog
Route::get('user/blog', [BlogController::class, 'indexUser'])->name('user.blog');
Route::get('user/detailBlogUser/{id}', [BlogController::class, 'detailBlogUser'])->name('user.detailBlog');

// Ikuti Kegiatan
Route::post('user/event/join/{id}', [EventController::class, 'joinEvent'])->name('user.event.join');

// Admin
Route::get('admin/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'admin'])->name('admin.dashboard');
// Event
Route::get('admin/event/events', [EventController::class, 'adminEvents'])->name('admin.events');
Route::get('admin/event/detailEvent/{id}', [EventController::class, 'adminDetailEvent'])->name('admin.event.detail');
// Add
Route::get('admin/event/addEvent', [EventController::class, 'adminAddEvent'])->name('admin.event.add');
Route::post('admin/saveEvent', [EventController::class, 'adminSaveEvent'])->name('admin.event.save');
// Edit
Route::get('admin/event/editEvent/{id}', [EventController::class, 'adminEditEvent'])->name('admin.event.edit');
Route::put('admin/event/updateEvent/{id}', [EventController::class, 'adminUpdateEvent'])->name('admin.event.update');
// Delete
Route::delete('admin/event/deleteEvent/{id}', [EventController::class, 'adminDeleteEvent'])->name('admin.event.delete');

// Aduan
Route::get('admin/aduan/aduans', [AduanController::class, 'adminAduans'])->name('admin.aduans');
Route::get('admin/aduan/detailAduan/{id}', [AduanController::class, 'adminDetailAduan'])->name('admin.aduan.detail');
// Edit
Route::get('admin/aduan/editAduan/{id}', [AduanController::class, 'adminEditAduan'])->name('admin.aduan.edit');
Route::put('admin/aduan/updateAduan/{id}', [AduanController::class, 'adminUpdateAduan'])->name('admin.aduan.update');
// Delete
Route::delete('admin/aduan/deleteAduan/{id}', [AduanController::class, 'adminDeleteAduan'])->name('admin.aduan.delete');

// Blog
Route::get('admin/blog/blogs', [BlogController::class, 'adminBlogs'])->name('admin.blogs');
Route::get('admin/blog/detailBlog/{id}', [BlogController::class, 'adminDetailBlog'])->name('admin.blog.detail');
// Add
Route::get('admin/blog/addBlog', [BlogController::class, 'adminAddBlog'])->name('admin.blog.add');
Route::post('admin/saveBlog', [BlogController::class, 'adminSaveBlog'])->name('admin.blog.save');
// Edit
Route::get('admin/blog/editBlog/{id}', [BlogController::class, 'adminEditBlog'])->name('admin.blog.edit');
Route::put('admin/blog/updateBlog/{id}', [BlogController::class, 'adminUpdateBlog'])->name('admin.blog.update');
// Delete
Route::delete('admin/blog/deleteBlog/{id}', [BlogController::class, 'adminDeleteBlog'])->name('admin.blog.delete');
