<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\DirekturController;
use App\Http\Controllers\DocumentTaskController;
use App\Http\Controllers\DraftController;
use App\Http\Controllers\KAbidangController;
use App\Http\Controllers\KAdepartementController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.dashboard');
});




Route::prefix('admin')
    // ->middleware('auth', 'admin')
    ->group(function () {
        Route::resource('adminDashboard', AdminDashboardController::class);
        Route::resource('admins', AdminController::class);
        Route::resource('direktur', DirekturController::class);
        Route::resource('kadepartement', KAdepartementController::class);
        Route::resource('kabidang', KAbidangController::class);
        Route::resource('staff', StaffController::class);
        Route::resource('departement', DepartementController::class);
        Route::resource('bidang', BidangController::class);
        Route::resource('task', TaskController::class);
        Route::resource('draft', DraftController::class);
        Route::resource('document', DocumentTaskController::class);
        Route::resource('setting', SettingController::class);
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
