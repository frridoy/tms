<?php

use App\Http\Controller\SslCommerzPaymentController as ControllerSslCommerzPaymentController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\dashboardController;
use App\Http\Controllers\Backend\HotelController;
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\Backend\ManageUsersController;
use App\Http\Controllers\Backend\TourPackagesController;
use App\Http\Controllers\Backend\ManageBookingController;
use App\Http\Controllers\Backend\ManagePagesController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\SpotController;
use App\Http\Controllers\Backend\TransportController;
use App\Http\Controllers\Backend\UserroleController;
use App\Http\Controllers\Frontend\FrontendHomeController;
use App\Http\Controllers\Frontend\TouristController;
use App\Http\Controllers\Frontend\SinglePackageViewController;
use App\Http\Controllers\Frontend\SinglePackageViewSelectController;
use App\Http\Controllers\Frontend\TouristProfileController;
use App\Http\Controllers\FrontendOurPackageController;

use App\Http\Controllers\SslCommerzPaymentController;
use Illuminate\Support\Manager;

// Route::get('/', function () {
//     return view('admin.master');
// });



//all route for frontend

//route for home

Route::get('/', [FrontendHomeController::class, 'home'])->name('home');

// route for tourist registration

Route::get('/registration', [TouristController::class, 'registration'])->name('registration');
Route::post('/registration/store', [TouristController::class, 'store'])->name('registration.store');

//route for tourist login

Route::get('/login', [TouristController::class, 'login'])->name('tourist.login');
Route::post('/login', [TouristController::class, 'doLogin'])->name('tourist.do.login');



// // For Tourist select form

// Route::get('/select/{single_pack_id}', [SinglePackageViewController::class, 'select'])->name('select');

// tourist booking reservation form data store

Route::get('/tourist/booking/form', [SinglePackageViewController::class, 'create'])->name('touristbooking.form');
Route::post('/tourist/booking/form/store', [SinglePackageViewController::class, 'store'])->name('tourist.store');



//single package view

Route::get('/singlepackage/view/{id}', [SinglePackageViewController::class, 'singlepackageview'])->name('singlepackage.view');



//for ssl call


// Route::get('/making/payment/{id}', [SinglePackageViewController::class, 'store'])->name('maketourist.payment');

//for make payment
// Route::get('/make/payment', [SinglePackageViewController::class, 'makepayment'])->name('make.payment');



//tourist Profile
Route::get('/tourist/profile', [TouristProfileController::class, 'touristprofile'])->name('tourist.profile');
Route::get('/tourist/profile/edit/{id}', [TouristProfileController::class, 'touristprofileedit'])->name('touristprofile.edit');
Route::put('/tourist/profile/update/{id}', [TouristProfileController::class, 'touristprofileupdate'])->name('touristprofile.update');


//for see the tourist booking info
Route::get('/my/booking/{id}', [TouristController::class, 'myBooking'])->name('my.booking');
Route::get('/my/booking/view/{id}', [TouristController::class, 'myBookingview'])->name('myBooking.view');

//report for tourist

// Route::get('/my/booking/report/{id}', [TouristController::class, 'myBookingreport'])->name('myBooking.report');



//for package serach
Route::get('/package/serach', [FrontendHomeController::class, 'search'])->name('package.search');


//Route for our Package, About Us and Contact Us

Route::get('/ourpackage', [FrontendOurPackageController::class, 'ourpackage'])->name('ourpackage.website');
Route::get('/aboutus', [FrontendOurPackageController::class, 'aboutus'])->name('aboutus.website');
Route::get('/contactus', [FrontendOurPackageController::class, 'contactus'])->name('contactus.website');

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

//for website middleware

Route::group(['middleware' => 'auth'], function () {


    // For Tourist select form

Route::get('/select/{single_pack_id}', [SinglePackageViewController::class, 'select'])->name('select');

    // Other routes that require authentication




    //route for tourist logout

    Route::get('/logout', [TouristController::class, 'logout'])->name('tourist.logout');
});






//all route for backend(admin)


Route::group(['prefix' => 'admin'], function () {



    Route::get("/login", [UserController::class, 'login'])->name('admin.login');
    Route::post("/login/form", [UserController::class, 'loginPost'])->name('admin.login.post');


    Route::group(['middleware' => 'auth'], function () {
        Route::group(['middleware' => 'CheckAdmin'], function () {

            Route::get("/logout", [UserController::class, 'logout'])->name('admin.logout');
            Route::get("/", [DashboardController::class, 'dashboard'])->name('dashboard');


            //admin_tour Packages

            Route::get("/tour-packages", [TourPackagesController::class, 'tpackage'])->name('tourpackages');
            Route::get("/tour-packages/form", [TourPackagesController::class, 'createform'])->name('tourpackages.form');
            Route::post("/tour-packages/store", [TourPackagesController::class, 'store'])->name('tourpackages.store');
            Route::get('/tourpackage/delete/{id}', [TourPackagesController::class, 'delete'])->name('package.delete');
            Route::get('/tourpackage/edit/{id}', [TourPackagesController::class, 'edit'])->name('package.edit');
            Route::put('/tourpackage/update/{id}', [TourPackagesController::class, 'update'])->name('package.update');
            Route::get('/tourpackage/view/{id}', [TourPackagesController::class, 'view'])->name('package.view');


            //For User Role

            Route::get('/user/role', [UserController::class, 'userrole'])->name('user.role');
            Route::get('/user/role/form', [UserController::class, 'create'])->name('userrole.form');
            Route::post('/user/role/form/store', [UserController::class, 'store'])->name('userrole.store');


            //for booking report


            Route::get('/tourist/booking/report', [ReportController::class, 'bookingreport'])->name('booking.report');


            //Admin_Profile

            Route::get('/myprofile', [AdminProfileController::class, 'adminprofile'])->name('adminprofile');


            //website reservation from to see the admin list

            Route::get('/tourist/booking', [SinglePackageViewController::class, 'touristbooking'])->name('tourist.booking');

            //for tourist search
            Route::get('/tourist/booking/search', [SinglePackageViewController::class, 'search'])->name('touristbooking.search');


            // admin booking delete, update, view

            Route::get('/tourist/booking/view/{id}', [BookingController::class, 'view'])->name('touristbooking.view');
            Route::get('/tourist/booking/delete/{id}', [BookingController::class, 'delete'])->name('touristbooking.delete');
        });
    });
});
