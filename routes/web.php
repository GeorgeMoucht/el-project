<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BioElpidaController;
use App\Http\Controllers\BioVasilisController;
use App\Http\Controllers\MusicFilesController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\AdminUsers;
use App\Http\Controllers\AdminEditGallery;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Mp3Controller;

use App\Http\Middleware\AdminMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/elpida-bio', [BioElpidaController::class, 'render'])->name('elpida-bio');

Route::get('/vasilis-bio', [BioVasilisController::class, 'render'])->name('vasilis-bio');

Route::get('/music-files', [MusicFilesController::class, 'render'])->name('music-files');

Route::get('/mp3', [Mp3Controller::class, 'render'])->name('mp3');

// Admin login routes
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

Route::get('/gallery', [GalleryController::class, 'render'])->name('gallery');
// Route::post('galllery/add-gallery-image', [])
Route::get('/contact', [ContactController::class, 'render'])->name('contact');
// Contact post page
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboard::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/users', [AdminUsers::class, 'render'])->name('admin.users');
    Route::delete('/admin/users/delete/{id}', [AdminUsers::class, 'deleteUser'])->name('admin.users.delete');
    Route::post('/admin/users/insert', [AdminUsers::class, 'insertUser'])->name('admin.users.insert');
    Route::get('/admin/edit-gallery', [AdminEditGallery::class, 'render'])->name('admin.edit-gallery');
    Route::post('/admin/edit-gallery/upload', [AdminEditGallery::class, 'uploadImage'])->name('admin.edit-gallery.upload');
    Route::delete('/admin/edit-gallery/delete/{id}', [AdminEditGallery::class, 'delete'])->name('admin.edit-gallery.delete');
    Route::post('/admin/edit-gallery/update/{id}', [AdminEditGallery::class, 'update'])->name('admin.edit-gallery.update');
});

// Route::middleware(['auth'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });
