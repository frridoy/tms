<?php

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
use App\Http\Controllers\Frontend\FrontendHomeController;
use App\Http\Controllers\Frontend\TouristController;
use Illuminate\Support\Manager;

// Route::get('/', function () {
//     return view('admin.master');
// });



//all route for frontend

Route::get('/',[FrontendHomeController::class,'home'])->name('home');


Route::get('/registration',[TouristController::class, 'registration'])->name('registration');
Route::post('/registration',[TouristController::class, 'store'])->name('registration.store');


Route::get('/login',[TouristController::class, 'login'])->name('tourist.login');
Route::post('/login',[TouristController::class,'doLogin'])->name('tourist.do.login');



Route::group(['middleware'=>'auth'],function(){
    Route::get('/logout',[TouristController::class, 'logout'])->name('tourist.logout');
});













Route::group(['prefix'=>'admin'],function(){


    //all route for backend




Route::get("/login",[UserController::class,'login'])->name('admin.login');
Route::post("/login/form",[UserController::class,'loginPost'])->name('admin.login.post');



Route::group(['middleware' => 'auth'], function () {

Route::get("/logout",[UserController::class,'logout'])->name('admin.logout');
Route::get("/",[DashboardController::class,'dashboard'])->name('dashboard');

//admin_rtour Packages

Route::get("/tour-packages",[TourPackagesController::class,'tpackage'])->name('tourpackages');
Route::get("/tour-packages/form",[TourPackagesController::class,'createform'])->name('tourpackages.form');
Route::post("/tour-packages/store",[TourPackagesController::class,'store'])->name('tourpackages.store');

// Route::get("/user/form",[ManageUsersController::class,'form'])->name('user.form');
// Route::get("/user/list",[ManageUsersController::class,'list'])->name('user.list');
// Route::post("/user/store",[ManageUsersController::class,'store'])->name('user.store');
// Route::get("/manageBooking/form",[ManageBookingController::class,'booking'])->name('managebooking.form');

//admin_location

Route::get("/location",[LocationController::class,'location_'])->name('location');
Route::get("/location/form",[LocationController::class,'create'])->name('location.form');
Route::post("/location/form/store",[LocationController::class,'store'])->name('location.store');



//admin_Hotel

Route::get("/hotel",[HotelController::class,'hotel'])->name('hotel');
Route::get("/hotel/form",[HotelController::class,'create'])->name('hotel.form');
Route::post("/hotel/form/store",[HotelController::class,'store'])->name('hotel.store');


//admin_Spot

Route::get('/spot',[SpotController::class,'spot'])->name('spot');
Route::get('/spot/form',[SpotController::class,'create'])->name('spot.form');
Route::post('/spot/form/store',[SpotController::class,'store'])->name('spot.store');

//Admin_manage_user


});

});






































































