<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ContactSubmissionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/cryolipolyse', function () {
    return view('cryolipolyse');
})->name('cryolipolyse');

Route::get('/body-sculpting', function () {
    return view('body-sculpting');
})->name('body-sculpting');

Route::get('/over-mij', function () {
    return view('over-mij');
})->name('over-mij');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/gallerij', [GalleryController::class, 'index'])->name('gallerij');

// Admin auth routes
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Admin protected routes
Route::prefix('admin')->middleware('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/gallerij', [AdminGalleryController::class, 'index'])->name('gallery.index');
    Route::get('/gallerij/nieuw', [AdminGalleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallerij', [AdminGalleryController::class, 'store'])->name('gallery.store');
    Route::get('/gallerij/{gallery_item}/bewerk', [AdminGalleryController::class, 'edit'])->name('gallery.edit');
    Route::put('/gallerij/{gallery_item}', [AdminGalleryController::class, 'update'])->name('gallery.update');
    Route::delete('/gallerij/{gallery_item}', [AdminGalleryController::class, 'destroy'])->name('gallery.destroy');

    Route::get('/berichten', [ContactSubmissionController::class, 'index'])->name('messages.index');
    Route::get('/berichten/{message}', [ContactSubmissionController::class, 'show'])->name('messages.show');
    Route::delete('/berichten/{message}', [ContactSubmissionController::class, 'destroy'])->name('messages.destroy');

    Route::get('/instellingen', [SettingsController::class, 'edit'])->name('settings.edit');
    Route::put('/instellingen', [SettingsController::class, 'update'])->name('settings.update');
});
