<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\CampaignController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Frontend\HomeController;
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

Route::get('/',[HomeController::class,'index'])->name('home');

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


    Route::group(['as'=>'admin.','prefix'=>'admin'],function(){

        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    
        Route::group(['as'=>'category.','prefix'=>'category'],function(){
    
            Route::get('/',[CategoryController::class, 'index'])->name('index');
            Route::get('/create',[CategoryController::class, 'create'])->name('create');
            Route::post('/store',[CategoryController::class, 'store'])->name('store');
            Route::get('/edit/{id}',[CategoryController::class, 'edit'])->name('edit');
            Route::post('/update/{id}',[CategoryController::class, 'update'])->name('update');
            Route::get('/delete/{id}',[CategoryController::class, 'delete'])->name('delete');
    
        });
    
        Route::group(['as'=>'tag.','prefix'=>'tag'],function(){
    
            Route::get('/',[TagController::class, 'index'])->name('index');
            Route::get('/create',[TagController::class, 'create'])->name('create');
            Route::post('/store',[TagController::class, 'store'])->name('store');
            Route::get('/edit/{id}',[TagController::class, 'edit'])->name('edit');
            Route::post('/update/{id}',[TagController::class, 'update'])->name('update');
            Route::get('/delete/{id}',[TagController::class, 'delete'])->name('delete');
    
        });


        Route::group(['as'=>'website.','prefix'=>'website'],function(){

            Route::group(['as'=>'menu.','prefix'=>'menu'],function(){

                Route::get('/',[MenuController::class, 'index'])->name('index');
                Route::get('/create',[MenuController::class, 'create'])->name('create');
                Route::post('/store',[MenuController::class, 'store'])->name('store');
                Route::get('/edit/{id}',[MenuController::class, 'edit'])->name('edit');
                Route::post('/update/{id}',[MenuController::class, 'update'])->name('update');
                Route::get('/delete/{id}',[MenuController::class, 'delete'])->name('delete');
                //ajax route
                Route::post('/order',[MenuController::class, 'order'])->name('order');
            });

            Route::group(['as'=>'banner.','prefix'=>'banner'],function(){

                Route::get('/',[BannerController::class, 'index'])->name('index');
                Route::get('/create',[BannerController::class, 'create'])->name('create');
                Route::post('/store',[BannerController::class, 'store'])->name('store');
                Route::get('/edit/{id}',[BannerController::class, 'edit'])->name('edit');
                Route::post('/update/{id}',[BannerController::class, 'update'])->name('update');
                Route::get('/delete/{id}',[BannerController::class, 'delete'])->name('delete');
                //ajax route
                Route::post('/status',[BannerController::class, 'status'])->name('status');
          
            });

            Route::group(['as'=>'testimonial.','prefix'=>'testimonial'],function(){

                Route::get('/',[TestimonialController::class, 'index'])->name('index');
                Route::get('/create',[TestimonialController::class, 'create'])->name('create');
                Route::post('/store',[TestimonialController::class, 'store'])->name('store');
                Route::get('/edit/{id}',[TestimonialController::class, 'edit'])->name('edit');
                Route::post('/update/{id}',[TestimonialController::class, 'update'])->name('update');
                Route::get('/delete/{id}',[TestimonialController::class, 'delete'])->name('delete');
                //ajax route
                Route::post('/status',[TestimonialController::class, 'status'])->name('status');
          
            });

        });


    });
   
    
});



// Route::middleware(['auth','role:vendor'])->group(function () {

//     Route::get('/vendor/dashboard', [VendorController::class, 'dashboard'])->name('vendor.dashboard');
    
// });
