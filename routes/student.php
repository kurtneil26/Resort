<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StudentController;

Route::get('dashboard', [StudentController::class, 'dashboard'])->name('dashboard');
