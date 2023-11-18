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
use Illuminate\Support\Manager;

// Route::get('/', function () {
//     return view('admin.master');
// });



//all route for frontend
Route::get('/',[FrontendHomeController::class,'home'])->name('home');


















Route::group(['prefix'=>'admin'],function(){

    //all route for backend




Route::get("/login",[UserController::class,'login'])->name('admin.login');
Route::post("/login/form",[UserController::class,'loginPost'])->name('admin.login.post');



Route::group(['middleware' => 'auth'], function () {

Route::get("/logout",[UserController::class,'logout'])->name('admin.logout');
Route::get("/",[DashboardController::class,'dashboard'])->name('dashboard');

Route::get("/tour-packages",[TourPackagesController::class,'tpackage'])->name('tourpackages');
Route::get("/tour-packages/form",[TourPackagesController::class,'createform'])->name('tourpackages.form');
Route::post("/tour-packages/store",[TourPackagesController::class,'store'])->name('tourpackages.store');

Route::get("/user/form",[ManageUsersController::class,'form'])->name('user.form');
Route::get("/user/list",[ManageUsersController::class,'list'])->name('user.list');
Route::post("/user/store",[ManageUsersController::class,'store'])->name('user.store');
Route::get("/manageBooking/form",[ManageBookingController::class,'booking'])->name('managebooking.form');



Route::get("/managepages",[ManagePagesController::class,'mpages'])->name('managepages');
Route::get("/managepages/form",[ManagePagesController::class,'create'])->name(('managepages.form'));
Route::post("/managepages/form/store",[ManagePagesController::class,'store'])->name('managepage.store');


Route::get("/location",[LocationController::class,'location_'])->name('location');
Route::get("/location/form",[LocationController::class,'create'])->name('location.form');
Route::post("/location/form/store",[LocationController::class,'store'])->name('location.store');




//Hotel

Route::get("/hotel",[HotelController::class,'hotel'])->name('hotel');
Route::get("/hotel/form",[HotelController::class,'create'])->name('hotel.form');
Route::post("/hotel/form/store",[HotelController::class,'store'])->name('hotel.store');


//Spot
Route::get('/spot',[SpotController::class,'spot'])->name('spot');
Route::get('/spot/form',[SpotController::class,'create'])->name('spot.form');
Route::post('/spot/form/store',[SpotController::class,'store'])->name('spot.store');

});

});






































































