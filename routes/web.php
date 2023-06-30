<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BioElpidaController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboard;
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

// Admin login routes
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');


Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboard::class, 'dashboard'])->name('admin.dashboard');
});

// Route::middleware(['auth'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
// });
