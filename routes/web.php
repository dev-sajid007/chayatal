<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
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

Route::middleware(['auth','role:admin'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::group(['as'=>'category.','prefix'=>'category'],function(){

        Route::get('/',[CategoryController::class, 'index'])->name('index');
        Route::get('/create',[CategoryController::class, 'create'])->name('create');
        Route::post('/store',[CategoryController::class, 'store'])->name('store');
        Route::get('/edit/{id}',[CategoryController::class, 'edit'])->name('edit');
        Route::post('/update/{id}',[CategoryController::class, 'update'])->name('update');
        Route::get('/delete/{id}',[CategoryController::class, 'delete'])->name('delete');

    });
    
});



// Route::middleware(['auth','role:vendor'])->group(function () {

//     Route::get('/vendor/dashboard', [VendorController::class, 'dashboard'])->name('vendor.dashboard');
    
// });
