<?php

use App\Http\Controllers\Backend\AdminProfileController;
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
use App\Http\Controllers\Frontend\FrontendHomeController;
use App\Http\Controllers\Frontend\TouristController;
use App\Http\Controllers\Frontend\SinglePackageViewController;
use App\Http\Controllers\Frontend\SinglePackageViewSelectController;
use Illuminate\Support\Manager;

// Route::get('/', function () {
//     return view('admin.master');
// });



//all route for frontend

//route for home

Route::get('/',[FrontendHomeController::class,'home'])->name('home');

// route for tourist registration

Route::get('/registration',[TouristController::class, 'registration'])->name('registration');
Route::post('/registration',[TouristController::class, 'store'])->name('registration.store');

//route for tourist login

Route::get('/login',[TouristController::class, 'login'])->name('tourist.login');
Route::post('/login',[TouristController::class,'doLogin'])->name('tourist.do.login');

//website single package view

Route::get('/singlepackage/view/{id}', [SinglePackageViewController::class, 'singlepackageview'])->name('singlepackage.view');

// For select

Route::get('/select', [SinglePackageViewController::class, 'select'])->name('select');
Route::get('/package/serach',[FrontendHomeController::class, 'search'])->name('package.search');
//Tourist Select Hotel,food and bus

// Route::get('/singlepackage/view/select', [SinglePackageViewSelectController::class, 'singlepackageviewselect'])->name('singlepackageview.selects');


Route::group(['middleware'=>'auth'],function(){

    //route for tourist logout

    Route::get('/logout',[TouristController::class, 'logout'])->name('tourist.logout');





});






//all route for backend(admin)


Route::group(['prefix'=>'admin'],function(){



Route::get("/login",[UserController::class,'login'])->name('admin.login');
Route::post("/login/form",[UserController::class,'loginPost'])->name('admin.login.post');


Route::group(['middleware' => 'auth'], function () {

Route::get("/logout",[UserController::class,'logout'])->name('admin.logout');
Route::get("/",[DashboardController::class,'dashboard'])->name('dashboard');


//admin_rtour Packages
Route::get("/tour-packages",[TourPackagesController::class,'tpackage'])->name('tourpackages');
Route::get("/tour-packages/form",[TourPackagesController::class,'createform'])->name('tourpackages.form');
Route::post("/tour-packages/store",[TourPackagesController::class,'store'])->name('tourpackages.store');
Route::get('/tourpackage/delete/{id}',[TourPackagesController::class,'delete'])->name('package.delete');
Route::get('/tourpackage/edit/{id}',[TourPackagesController::class,'edit'])->name('package.edit');
Route::put('/tourpackage/update/{id}',[TourPackagesController::class,'update'])->name('package.update');
Route::get('/tourpackage/view/{id}',[TourPackagesController::class,'view'])->name('package.view');


//admin_location
Route::get("/location",[LocationController::class,'location_'])->name('location');
Route::get("/location/form",[LocationController::class,'create'])->name('location.form');
Route::post("/location/form/store",[LocationController::class,'store'])->name('location.store');
Route::get('/location/view/{id}',[LocationController::class,'view'])->name('location.view');
Route::get('/location/delete/{id}',[LocationController::class,'delete'])->name('location.delete');
Route::get('/location/edit/{id}',[LocationController::class,'edit'])->name('location.edit');
Route::put('/location/update/{id}',[LocationController::class,'update'])->name('location.update');



//admin_Hotel
Route::get("/hotel",[HotelController::class,'hotel'])->name('hotel');
Route::get("/hotel/form",[HotelController::class,'create'])->name('hotel.form');
Route::post("/hotel/form/store",[HotelController::class,'store'])->name('hotel.store');
Route::get("/hotel/delete/{id}",[HotelController::class,'delete'])->name('hotel.delete');
Route::get("/hotel/edit/{id}",[HotelController::class,'edit'])->name('hotel.edit');
Route::put("/hotel/update/{id}",[HotelController::class,'update'])->name('hotel.update');
Route::get("/hotel/view/{id}",[HotelController::class,'view'])->name('hotel.view');


//admin_Spot
Route::get('/spot',[SpotController::class,'spot'])->name('spot');
Route::get('/spot/form',[SpotController::class,'create'])->name('spot.form');
Route::post('/spot/form/store',[SpotController::class,'store'])->name('spot.store');


//Transport
Route::get('/transport',[TransportController::class,'transport'])->name('transport');
Route::get('/transport/form',[TransportController::class,'create'])->name('transport.form');
Route::post('/transport/form/store',[TransportController::class,'store'])->name('transport.store');


//Admin_Profile
Route::get('/myprofile',[AdminProfileController::class,'adminprofile'])->name('adminprofile');


});

});






































































