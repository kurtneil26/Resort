<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ReceiptController;

//default page for guest
Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Route::get('/dashboard', function () {

    $user = Auth::user();
    if ($user) {
        // Check the user's role and redirect accordingly
        return match ($user->role) {
            'admin' => redirect()->route('admin.welcome'),
            'student' => redirect()->route('student.dashboard'),
            default => redirect()->route('dashboard.default'),
        };
    }
    return view('welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::post('/admin/receipt/store', [ReceiptController::class, 'store'])->name('admin.admin.receipt.store');
Route::get('/admin/receipt/{id}', [ReceiptController::class, 'show'])->name('admin.admin.receipt.show');
