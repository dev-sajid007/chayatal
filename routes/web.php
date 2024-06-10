<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AdviserControler;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\CampaignController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ChayatalNewsController;
use App\Http\Controllers\Backend\ChildController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\ExecutiveController;
use App\Http\Controllers\Backend\FooterContentController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\GoverningBodyController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\SponsorController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\Backend\WebInfoController;
use App\Http\Controllers\Frontend\AdministrativeController;
use App\Http\Controllers\Frontend\ChildController as FrontendChildController;
use App\Http\Controllers\Frontend\DonationController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PageContentController;
use App\Http\Controllers\Frontend\ProjectController as FrontendProjectController;
use App\Http\Controllers\Frontend\ReportController as FrontendReportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SslCommerzPaymentController;
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


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';

Route::get('/login', [AdminController::class, 'login'])->name('login');

//pages
Route::get('/donation',[DonationController::class,'donate'])->name('donation');
Route::get('/sponsor-a-child',[FrontendChildController::class,'sponsor'])->name('sponsor-a-child');

Route::get('/upcoming-projects',[FrontendProjectController::class,'upcomingProjects'])->name('upcoming-projects');
Route::get('/running-projects',[FrontendProjectController::class,'runningProjects'])->name('running-projects');
Route::get('/completed-projects',[FrontendProjectController::class,'completedProjects'])->name('completed-projects');
Route::get('/single-project/{id}',[FrontendProjectController::class,'singleProject'])->name('single-project');

//reports
Route::get('/monthly-reports',[FrontendReportController::class,'monthlyReports'])->name('monthly-reports');
Route::get('/annual-reports',[FrontendReportController::class,'annualReports'])->name('annual-reports');
Route::get('/audit-reports',[FrontendReportController::class,'auditReports'])->name('audit-reports');

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

        Route::group(['as'=>'child.','prefix'=>'child'],function(){
    
            Route::get('/',[ChildController::class, 'index'])->name('index');
            Route::get('/create',[ChildController::class, 'create'])->name('create');
            Route::post('/store',[ChildController::class, 'store'])->name('store');
            Route::get('/edit/{id}',[ChildController::class, 'edit'])->name('edit');
            Route::post('/update/{id}',[ChildController::class, 'update'])->name('update');
            Route::get('/delete/{id}',[ChildController::class, 'delete'])->name('delete');
    
        });


        Route::group(['as'=>'executive.','prefix'=>'executive'],function(){
    
            Route::get('/',[ExecutiveController::class, 'index'])->name('index');
            Route::get('/create',[ExecutiveController::class, 'create'])->name('create');
            Route::post('/store',[ExecutiveController::class, 'store'])->name('store');
            Route::get('/edit/{id}',[ExecutiveController::class, 'edit'])->name('edit');
            Route::post('/update/{id}',[ExecutiveController::class, 'update'])->name('update');
            Route::get('/delete/{id}',[ExecutiveController::class, 'delete'])->name('delete');
    
        });

        Route::group(['as'=>'governing_body.','prefix'=>'governing_body'],function(){
    
            Route::get('/',[GoverningBodyController::class, 'index'])->name('index');
            Route::get('/create',[GoverningBodyController::class, 'create'])->name('create');
            Route::post('/store',[GoverningBodyController::class, 'store'])->name('store');
            Route::get('/edit/{id}',[GoverningBodyController::class, 'edit'])->name('edit');
            Route::post('/update/{id}',[GoverningBodyController::class, 'update'])->name('update');
            Route::get('/delete/{id}',[GoverningBodyController::class, 'delete'])->name('delete');
    
        });

        Route::group(['as'=>'adviser.','prefix'=>'adviser'],function(){
    
            Route::get('/',[AdviserControler::class, 'index'])->name('index');
            Route::get('/create',[AdviserControler::class, 'create'])->name('create');
            Route::post('/store',[AdviserControler::class, 'store'])->name('store');
            Route::get('/edit/{id}',[AdviserControler::class, 'edit'])->name('edit');
            Route::post('/update/{id}',[AdviserControler::class, 'update'])->name('update');
            Route::get('/delete/{id}',[AdviserControler::class, 'delete'])->name('delete');
    
        });

        Route::group(['as'=>'project.','prefix'=>'project'],function(){
    
            Route::get('/',[ProjectController::class, 'index'])->name('index');
            Route::get('/create',[ProjectController::class, 'create'])->name('create');
            Route::post('/store',[ProjectController::class, 'store'])->name('store');
            Route::get('/edit/{id}',[ProjectController::class, 'edit'])->name('edit');
            Route::post('/update/{id}',[ProjectController::class, 'update'])->name('update');
            Route::get('/delete/{id}',[ProjectController::class, 'delete'])->name('delete');
    
        });

        Route::group(['as'=>'chayatal-news.','prefix'=>'chayatal-news'],function(){
    
            Route::get('/',[ChayatalNewsController::class, 'index'])->name('index');
            Route::get('/create',[ChayatalNewsController::class, 'create'])->name('create');
            Route::post('/store',[ChayatalNewsController::class, 'store'])->name('store');
            Route::get('/edit/{id}',[ChayatalNewsController::class, 'edit'])->name('edit');
            Route::post('/update/{id}',[ChayatalNewsController::class, 'update'])->name('update');
            Route::get('/delete/{id}',[ChayatalNewsController::class, 'delete'])->name('delete');
    
        });


        Route::group(['as'=>'report.','prefix'=>'report'],function(){
    
            Route::get('/',[ReportController::class, 'index'])->name('index');
            Route::get('/create',[ReportController::class, 'create'])->name('create');
            Route::post('/store',[ReportController::class, 'store'])->name('store');
            Route::get('/edit/{id}',[ReportController::class, 'edit'])->name('edit');
            Route::post('/update/{id}',[ReportController::class, 'update'])->name('update');
            Route::get('/delete/{id}',[ReportController::class, 'delete'])->name('delete');
    
        });






        //website management

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

            Route::group(['as'=>'page.','prefix'=>'page'],function(){

                Route::get('/',[PageController::class, 'index'])->name('index');
                Route::get('/create',[PageController::class, 'create'])->name('create');
                Route::post('/store',[PageController::class, 'store'])->name('store');
                Route::get('/edit/{id}',[PageController::class, 'edit'])->name('edit');
                Route::post('/update/{id}',[PageController::class, 'update'])->name('update');
                Route::get('/delete/{id}',[PageController::class, 'delete'])->name('delete');
         
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

            Route::group(['as'=>'gallery.','prefix'=>'gallery'],function(){

                Route::get('/',[GalleryController::class, 'index'])->name('index');
                Route::get('/create',[GalleryController::class, 'create'])->name('create');
                Route::post('/store',[GalleryController::class, 'store'])->name('store');
                Route::get('/edit/{id}',[GalleryController::class, 'edit'])->name('edit');
                Route::post('/update/{id}',[GalleryController::class, 'update'])->name('update');
                Route::get('/delete/{id}',[GalleryController::class, 'delete'])->name('delete');
                //ajax route
                Route::post('/status',[GalleryController::class, 'status'])->name('status');
          
            });
            

            Route::group(['as'=>'sponsor.','prefix'=>'sponsor'],function(){

                Route::get('/',[SponsorController::class, 'index'])->name('index');
                Route::get('/create',[SponsorController::class, 'create'])->name('create');
                Route::post('/store',[SponsorController::class, 'store'])->name('store');
                Route::get('/edit/{id}',[SponsorController::class, 'edit'])->name('edit');
                Route::post('/update/{id}',[SponsorController::class, 'update'])->name('update');
                Route::get('/delete/{id}',[SponsorController::class, 'delete'])->name('delete');
                //ajax route
                Route::post('/status',[SponsorController::class, 'status'])->name('status');
            });

            Route::group(['as'=>'event.','prefix'=>'event'],function(){

                Route::get('/',[EventController::class, 'index'])->name('index');
                Route::get('/create',[EventController::class, 'create'])->name('create');
                Route::post('/store',[EventController::class, 'store'])->name('store');
                Route::get('/edit/{id}',[EventController::class, 'edit'])->name('edit');
                Route::post('/update/{id}',[EventController::class, 'update'])->name('update');
                Route::get('/delete/{id}',[EventController::class, 'delete'])->name('delete');
                //ajax route
                Route::post('/status',[EventController::class, 'status'])->name('status');
            });


            Route::group(['as'=>'news.','prefix'=>'news'],function(){

                Route::get('/',[NewsController::class, 'index'])->name('index');
                Route::get('/create',[NewsController::class, 'create'])->name('create');
                Route::post('/store',[NewsController::class, 'store'])->name('store');
                Route::get('/edit/{id}',[NewsController::class, 'edit'])->name('edit');
                Route::post('/update/{id}',[NewsController::class, 'update'])->name('update');
                Route::get('/delete/{id}',[NewsController::class, 'delete'])->name('delete');
                //ajax route
                Route::post('/status',[NewsController::class, 'status'])->name('status');
            });


            Route::group(['as'=>'footer.','prefix'=>'footer'],function(){

                Route::get('/',[FooterContentController::class, 'index'])->name('index');
                Route::post('/update',[FooterContentController::class, 'update'])->name('update');

            });


            Route::group(['as'=>'web-info.','prefix'=>'web-info'],function(){

                Route::get('/',[WebInfoController::class, 'index'])->name('index');
                Route::get('/create',[WebInfoController::class, 'create'])->name('create');
                Route::post('/store',[WebInfoController::class, 'store'])->name('store');
                Route::get('/edit/{id}',[WebInfoController::class, 'edit'])->name('edit');
                Route::post('/update/{id}',[WebInfoController::class, 'update'])->name('update');
                Route::get('/delete/{id}',[WebInfoController::class, 'delete'])->name('delete');
    
            });
        });
    });
   
    
});



// Route::middleware(['auth','role:vendor'])->group(function () {

//     Route::get('/vendor/dashboard', [VendorController::class, 'dashboard'])->name('vendor.dashboard');
    
// });

Route::get('/news/{id}',[NewsController::class, 'show'])->name('news.show');
Route::get('/childs/{id}',[FrontendChildController::class, 'show'])->name('childs.show');

Route::get('/executive', [AdministrativeController::class, 'executive'])->name('executive');
Route::get('/governing_body', [AdministrativeController::class, 'governingBody'])->name('governing_body');
Route::get('/adviser', [AdministrativeController::class, 'adviser'])->name('adviser');


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


Route::get('/{slug}',[PageController::class,'page'])->name('page');