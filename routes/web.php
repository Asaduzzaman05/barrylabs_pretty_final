<?php

// use AdminServiceController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Models\Admin\PermissionController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ManagementController;
use App\Http\Controllers\Admin\WhyChooseController;
use App\Http\Middleware\AdminCheck;
use App\Http\Controllers\Admin\PhotoGellaryController;
use App\Http\Controllers\Admin\CompanyProfileController;
use Admin\AdminAis;
use Admin\AdminHcm;
use Admin\AdminPlm;
use Admin\AdminScm;
use Admin\Company;
use Admin\Transaction;
use Admin\Invoice;
use Admin\Courier;
use Admin\Challan;
use Admin\Inventory;
use Admin\Conveyance;


// Route::get('/', function () {
//     return view('welcome');
// });

// admin route


Route::get('/login',[AuthController::class, 'loginShow'])->name('login');
Route::get('/',[HomeController::class, 'home'])->name('home');
Route::post('message-store',[ContactController::class,'store'])->name('message.store');
Route::get('contact-us',[HomeController::class, 'contact'])->name('contact.website');
Route::get('about-us',[HomeController::class, 'about'])->name('about.website');
Route::get('product-page',[HomeController::class, 'service'])->name('service.website');
Route::get('blog-page',[HomeController::class, 'blog'])->name('blog.website');
Route::get('blog-details/{id}',[HomeController::class, 'blogdetails'])->name('blog.details');
Route::get('blog-comment/{id}',[HomeController::class, 'blogdetails'])->name('blog.details');
Route::post('/comments', [HomeController::class, 'storeComment'])->name('comments.store');
Route::post('/reply', [HomeController::class, 'replyComment'])->name('comments.reply');

// Route::get('photo-gallary',[HomeController::class,'PhotoGellary'])->name('photo.gellary');

Route::get('management-list',[HomeController::class,'management'])->name('management.website');
Route::post('/login-check',[AuthController::class, 'authCheck'])->name('login.check');



Route::group(['middleware' => ['auth']] , function(){
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.index');
    // Admin Register
    Route::get('user-create', [UserController::class, 'register'])->name('user.index');
    Route::post('user-store', [UserController::class, 'createUser'])->name('user.store');
    Route::get('user-edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('user-update/{id}', [UserController::class, 'updateUser'])->name('user.update');
    Route::delete('user-delete/{id}', [UserController::class, 'deleteUser'])->name('user.destroy');
    Route::get('password-change', [UserController::class, 'changepassword'])->name('user.changepassword');
    Route::post('password-update', [UserController::class, 'passwordUpdate'])->name('user.passwordUpdate');

});


Route::group(['middleware' => ['auth']] , function(){
   //banner Route
    Route::get('slider-create',[BannerController::class, 'index'])->name('slider.create');
    Route::post('slider-store',[BannerController::class, 'store'])->name('slider.store');
    Route::get('slider-edit/{id}',[BannerController::class, 'edit'])->name('slider.edit');
    Route::post('slider-update/{id}',[BannerController::class, 'update'])->name('slider.update');
    Route::delete('slider-delete/{id}',[BannerController::class, 'delete'])->name('slider.destroy');
    //Photo Gallary Route
    Route::get('/photo',[PhotoGellaryController::class,'index'])->name('photo.index');
    Route::post('/photo-store',[PhotoGellaryController::class,'store'])->name('photo.store');
    Route::get('/photo-edit/{id}',[PhotoGellaryController::class,'edit'])->name('photo.edit');
    Route::put('/photo-update/{id}',[PhotoGellaryController::class,'update'])->name('photo.update');
    Route::delete('/photo-delete/{id}',[PhotoGellaryController::class,'delete'])->name('photo.destroy');
    //Client Route
    Route::get('/client',[ProjectController::class,'index'])->name('client.index');
    Route::post('/client-store',[ProjectController::class,'store'])->name('client.store');
    Route::get('/client-edit/{id}',[ProjectController::class,'edit'])->name('client.edit');
    Route::put('/client-update/{id}',[ProjectController::class,'update'])->name('client.update');
    Route::delete('/client-delete/{id}',[ProjectController::class,'delete'])->name('client.destroy');
    //Counter Route
    Route::get('/counter',[CounterController::class,'index'])->name('counter.index');
    Route::post('/counter-store',[CounterController::class,'store'])->name('counter.store');
    Route::get('/counter-edit/{id}',[CounterController::class,'edit'])->name('counter.edit');
    Route::put('/counter-update/{id}',[CounterController::class,'update'])->name('counter.update');
    Route::delete('/counter-delete/{id}',[CounterController::class,'delete'])->name('counter.destroy');
    // Service route resource
    Route::get('/product',[ServiceController::class,'index'])->name('service.index');
    Route::get('/service-all',[ServiceController::class,'allservice'])->name('service.show');
    Route::post('/service/store',[ServiceController::class,'store'])->name('service.store');
    Route::get('/service-edit/{id}',[ServiceController::class,'edit'])->name('service.edit');
    Route::post('/service-update/{id}',[ServiceController::class,'update'])->name('service.update');
    Route::delete('/service-delete/{id}',[ServiceController::class,'destroy'])->name('service.destroy');
    // Management route resource
    Route::get('/management',[ManagementController::class,'index'])->name('management.index');
    Route::get('/management-all',[ManagementController::class,'allManagement'])->name('management.show');
    Route::post('/management/store',[ManagementController::class,'store'])->name('management.store');
    Route::get('/management-edit/{id}',[ManagementController::class,'edit'])->name('management.edit');
    Route::post('/management-update/{id}',[ManagementController::class,'update'])->name('management.update');
    Route::delete('/management-delete/{id}',[ManagementController::class,'destroy'])->name('management.destroy');
    // Why Choose route
    Route::get('/choose-us',[WhyChooseController::class,'index'])->name('choose.index');
    Route::get('/choose-us-all',[WhyChooseController::class,'allChoose'])->name('choose.show');
    Route::post('/choose-us/store',[WhyChooseController::class,'store'])->name('choose.store');
    Route::get('/choose-us-edit/{id}',[WhyChooseController::class,'edit'])->name('choose.edit');
    Route::post('/choose-us-update/{id}',[WhyChooseController::class,'update'])->name('choose.update');
    Route::delete('/choose-us-delete/{id}',[WhyChooseController::class,'destroy'])->name('choose.destroy');
    //Contact Us
    Route::get('message-list',[ContactUsController::class,'index'])->name('message.list');
    Route::delete('message-delete/{id}',[ContactUsController::class,'delete'])->name('message.destroy');
    //Company Profile
    Route::get('website-content-edit', [CompanyProfileController::class, 'edit'])->name('company.profile');
    Route::put('website-content-update/{id}', [CompanyProfileController::class, 'update'])->name('company.profile.update');
    //blog admin side
    Route::get('/create-blog',[BlogController::class,'index'])->name('blog.index');

    // Route::post('/store-blog', [BlogController::class, 'store'])->name('blog.store');
    Route::post('/store-blog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/store-blog-all',[BlogController::class,'allblogs'])->name('blog.show');
    Route::get('/edit-blog/{id}',[BlogController::class,'edit'])->name('blog.edit');
    Route::post('/blog-update/{id}',[WhyChooseController::class,'update'])->name('blog.update');

<<<<<<< HEAD


=======
<<<<<<< HEAD



=======
>>>>>>> b0e08615dcc405ee24ed66ad457a47fe467b6e69
>>>>>>> 00ce2bb1dc5ad6b309348dd9a872833e2c94498e
    Route::resource('admin-ais',  AdminAis::class);
         Route::resource('admin-company',  Company::class);
         Route::resource('admin-transaction',  Transaction::class);
         Route::resource('admin-invoice',  Invoice::class);
         Route::resource('admin-courier',  Courier::class);
         Route::resource('admin-challan',  Challan::class);
         Route::resource('admin-inventory',  Inventory::class);
         Route::resource('admin-conveyance',  Conveyance::class);



    Route::resource('admin-hcm',  AdminHcm::class);
    Route::resource('admin-plm',  AdminPlm::class);
    Route::resource('admin-scm',  AdminScm::class);
});



<<<<<<< HEAD
// Route::get('/service-ais',[HomeController::class,'ais'])->name('ais');
//     Route::get('/service-company',[HomeController::class,'company'])->name('company');
//     Route::get('/service-transaction',[HomeController::class,'transaction'])->name('transaction');
//     Route::get('/service-invoice',[HomeController::class,'invoice'])->name('invoice');
//     Route::get('/service-courier',[HomeController::class,'courier'])->name('courier');
//     Route::get('/service-challan',[HomeController::class,'challan'])->name('challan');
//     Route::get('/service-challan',[HomeController::class,'challan'])->name('challan');
//     Route::get('/service-inventory',[HomeController::class,'inventory'])->name('inventory');
//     Route::get('/service-conveyance',[HomeController::class,'conveyance'])->name('conveyance');

// Route::get('/service-hcm',[HomeController::class,'hcm'])->name('hcm');
//     Route::get('/service-employee',[HomeController::class,'employee'])->name('employee');
//     Route::get('/service-employee',[HomeController::class,'employee'])->name('employee');
//     Route::get('/service-wages',[HomeController::class,'wages'])->name('wages');
//     Route::get('/service-task',[HomeController::class,'task'])->name('task');
//     Route::get('/service-attendance',[HomeController::class,'attendance'])->name('attendance');
//     Route::get('/service-deduction',[HomeController::class,'deduction'])->name('deduction');
//     Route::get('/service-recruitment',[HomeController::class,'recruitment'])->name('recruitment');
//     Route::get('/service-aptitude',[HomeController::class,'aptitude'])->name('aptitude');


// Route::get('/service-plm',[HomeController::class,'plm'])->name('plm');
//     Route::get('/service-style',[HomeController::class,'style'])->name('style');
//     Route::get('/service-budget',[HomeController::class,'budget'])->name('budget');
//     Route::get('/service-tna',[HomeController::class,'tna'])->name('tna');
//     Route::get('/service-production',[HomeController::class,'production'])->name('production');
//     Route::get('/service-ie',[HomeController::class,'ie'])->name('ie');
//     Route::get('/service-log',[HomeController::class,'log'])->name('log');
//     Route::get('/service-design',[HomeController::class,'design'])->name('design');


// Route::get('/service-scm',[HomeController::class,'scm'])->name('scm');
// Route::get('/service-commercial',[HomeController::class,'commercial'])->name('commercial');
// Route::get('/service-docs',[HomeController::class,'docs'])->name('docs');

Route::get('/service/{module}/{submodule}',[HomeController::class,'allservice']);
Route::resource('admin-service',  AdminServiceController::class);
Route::get('service-create/{module}/{submodule}',  [\App\Http\Controllers\AdminServiceController::class, 'index2']);
Route::get('admin-service/edit/{id}', [\App\Http\Controllers\AdminServiceController::class, 'edit'])->name('admin-service.edit');
Route::delete('admin-service/{id}', [\App\Http\Controllers\AdminServiceController::class, 'destroy']);

Route::get('our_service/{module}/{submodule}',[HomeController::class,'WebService'])->name('our_service');




=======
Route::get('/service-ais',[HomeController::class,'ais'])->name('ais');
Route::get('/service-hcm',[HomeController::class,'hcm'])->name('hcm');
Route::get('/service-plm',[HomeController::class,'plm'])->name('plm');
Route::get('/service-scm',[HomeController::class,'scm'])->name('scm');
>>>>>>> 00ce2bb1dc5ad6b309348dd9a872833e2c94498e
