<?php

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
use App\Http\Controllers\Backend\SpotController;
use App\Http\Controllers\Backend\TransportController;
use App\Http\Controllers\Backend\UserroleController;
use App\Http\Controllers\Frontend\FrontendHomeController;
use App\Http\Controllers\Frontend\TouristController;
use App\Http\Controllers\Frontend\SinglePackageViewController;
use App\Http\Controllers\Frontend\SinglePackageViewSelectController;
use App\Http\Controllers\Frontend\TouristProfileController;
use App\Http\Controllers\FrontendOurPackageController;
use Illuminate\Support\Manager;

// Route::get('/', function () {
//     return view('admin.master');
// });



//all route for frontend

//route for home

Route::get('/', [FrontendHomeController::class, 'home'])->name('home');

// route for tourist registration

Route::get('/registration', [TouristController::class, 'registration'])->name('registration');
Route::post('/registration', [TouristController::class, 'store'])->name('registration.store');

//route for tourist login

Route::get('/login', [TouristController::class, 'login'])->name('tourist.login');
Route::post('/login', [TouristController::class, 'doLogin'])->name('tourist.do.login');



// For Tourist select form

Route::get('/select', [SinglePackageViewController::class, 'select'])->name('select');

Route::get('/singlepackage/view/{id}', [SinglePackageViewController::class, 'singlepackageview'])->name('singlepackage.view');

//website from to admin list

Route::get('/tourist/booking',[SinglePackageViewController::class,'touristbooking'])->name('tourist.booking');
Route::get('/tourist/booking/form',[SinglePackageViewController::class,'create'])->name('touristbooking.form');
Route::post('/tourist/booking/form/store',[SinglePackageViewController::class,'store'])->name('tourist.store');

 //tourist Profile
 Route::get('/tourist/profile',[TouristProfileController::class,'touristprofile'])->name('tourist.profile');

Route::get('/package/serach', [FrontendHomeController::class, 'search'])->name('package.search');


//Route for our package, About Us and Contact Us

Route::get('/ourpackage', [FrontendOurPackageController::class, 'ourpackage'])->name('ourpackage.website');
Route::get('/aboutus', [FrontendOurPackageController::class, 'aboutus'])->name('aboutus.website');
Route::get('/contactus', [FrontendOurPackageController::class, 'contactus'])->name('contactus.website');

//for website middleware
Route::group(['middleware' => 'auth'], function () {




        // Other routes that require authentication


        //website single package view




    //route for tourist logout

    Route::get('/logout', [TouristController::class, 'logout'])->name('tourist.logout');

});






//all route for backend(admin)


Route::group(['prefix' => 'admin'], function () {



    Route::get("/login", [UserController::class, 'login'])->name('admin.login');
    Route::post("/login/form", [UserController::class, 'loginPost'])->name('admin.login.post');


    Route::group(['middleware' => 'auth'], function () {
        Route::group(['middleware'=>'CheckAdmin'], function(){

        Route::get("/logout", [UserController::class, 'logout'])->name('admin.logout');
        Route::get("/", [DashboardController::class, 'dashboard'])->name('dashboard');


        //admin_rtour Packages
        Route::get("/tour-packages", [TourPackagesController::class, 'tpackage'])->name('tourpackages');
        Route::get("/tour-packages/form", [TourPackagesController::class, 'createform'])->name('tourpackages.form');
        Route::post("/tour-packages/store", [TourPackagesController::class, 'store'])->name('tourpackages.store');
        Route::get('/tourpackage/delete/{id}', [TourPackagesController::class, 'delete'])->name('package.delete');
        Route::get('/tourpackage/edit/{id}', [TourPackagesController::class, 'edit'])->name('package.edit');
        Route::put('/tourpackage/update/{id}', [TourPackagesController::class, 'update'])->name('package.update');
        Route::get('/tourpackage/view/{id}', [TourPackagesController::class, 'view'])->name('package.view');


        //admin_location
        Route::get("/location", [LocationController::class, 'location_'])->name('location');
        Route::get("/location/form", [LocationController::class, 'create'])->name('location.form');
        Route::post("/location/form/store", [LocationController::class, 'store'])->name('location.store');
        Route::get('/location/view/{id}', [LocationController::class, 'view'])->name('location.view');
        Route::get('/location/delete/{id}', [LocationController::class, 'delete'])->name('location.delete');
        Route::get('/location/edit/{id}', [LocationController::class, 'edit'])->name('location.edit');
        Route::put('/location/update/{id}', [LocationController::class, 'update'])->name('location.update');



        //admin_Hotel
        Route::get("/hotel", [HotelController::class, 'hotel'])->name('hotel');
        Route::get("/hotel/form", [HotelController::class, 'create'])->name('hotel.form');
        Route::post("/hotel/form/store", [HotelController::class, 'store'])->name('hotel.store');
        Route::get("/hotel/delete/{id}", [HotelController::class, 'delete'])->name('hotel.delete');
        Route::get("/hotel/edit/{id}", [HotelController::class, 'edit'])->name('hotel.edit');
        Route::put("/hotel/update/{id}", [HotelController::class, 'update'])->name('hotel.update');
        Route::get("/hotel/view/{id}", [HotelController::class, 'view'])->name('hotel.view');


        //admin_Spot
        Route::get('/spot', [SpotController::class, 'spot'])->name('spot');
        Route::get('/spot/form', [SpotController::class, 'create'])->name('spot.form');
        Route::post('/spot/form/store', [SpotController::class, 'store'])->name('spot.store');


        //Transport
        Route::get('/transport', [TransportController::class, 'transport'])->name('transport');
        Route::get('/transport/form', [TransportController::class, 'create'])->name('transport.form');
        Route::post('/transport/form/store', [TransportController::class, 'store'])->name('transport.store');

        // Booking
        // Route::get('/tourist/booking',[BookingController::class,'touristbooking'])->name('tourist.booking');
        // Route::get('/tourist/booking/form',[BookingController::class,'create'])->name('touristbooking.form');
        // Route::post('/tourist/booking/form/store',[BookingController::class,'store'])->name('tourist..store');

        //For User Role
        Route::get('/user/role',[UserController::class, 'userrole'])->name('user.role');
        Route::get('/user/role/form',[UserController::class, 'create'])->name('userrole.form');
        Route::post('/user/role/form/store',[UserController::class, 'store'])->name('userrole.store');


        //Admin_Profile
        Route::get('/myprofile', [AdminProfileController::class, 'adminprofile'])->name('adminprofile');
        });
    });

});


