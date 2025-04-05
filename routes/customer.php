<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\PackagesController;


//route for help
Route::get('packages', [PackagesController::class, 'index'])->name('packages.index');
