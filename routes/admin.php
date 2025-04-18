<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\AmenitiesController;
use App\Http\Controllers\Admin\PackagesController;
use App\Http\Controllers\Admin\HelpController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ModalController;
use App\Http\Controllers\Admin\ReceiptController;
use App\Http\Controllers\Admin\ReservationController;





//route for admin dashboard
Route::get('homepage', [AdminController::class, 'index'])->name('welcome');
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

//route for blank template
Route::get('blank', [AdminController::class, 'blankTemplate'])->name('blank-template');
Route::get('users/data', [AdminController::class, 'getUsers'])->name('users.get'); // Fetch data for DataTable

//route for users
Route::get('user-list', [UserController::class, 'getUsers'])->name('users.get-all');
Route::resource(name: 'users', controller: UserController::class);

// Room management
Route::get('room', [RoomController::class, 'index'])->name('room.index');

// Modal specific route
Route::get('room/modal', [ModalController::class, 'modal'])->name('room.modal');

//route for amenities
Route::get('amenities', [AmenitiesController::class, 'index'])->name('amenities.index');

//route for packages
Route::get('packages', [PackagesController::class, 'index'])->name('packages.index');



//route for help
Route::get('help', [HelpController::class, 'index'])->name('help.index');

//route for dashboard
Route::get('DashboardController', [DashboardController::class, 'index'])->name('dashboard');

//route for reservation
Route::get('reservation', [ReservationController::class, 'index'])->name('reservation.index');

// Receipt routes
// Single level grouping
Route::prefix('admin/receipt')->name('admin.receipt.')->group(function () {
    Route::post('/', [ReceiptController::class, 'store'])->name('store');
    Route::get('/{reservation}', [ReceiptController::class, 'show'])->name('show');
});
// Receipt routes
Route::post('/admin/receipt', [ReceiptController::class, 'store'])->name('admin.admin.receipt.store');
Route::get('/admin/receipt/{id}', [ReceiptController::class, 'show'])->name('admin.admin.receipt.show');


Route::get('/admin/reservation', [ReservationController::class, 'index'])->name('admin.reservation.index');
