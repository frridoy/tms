<?php

use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ManageUsersController;
use App\Http\Controllers\TourPackagesController;
use App\Http\Controllers\ManageBookingController;
use App\Http\Controllers\ManagePagesController;
use Illuminate\Support\Manager;

// Route::get('/', function () {
//     return view('admin.master');
// });
Route::get("admin/login",[UserController::class,'login'])->name('admin.login');
Route::post("/login/form",[UserController::class,'loginPost'])->name('admin.login.post');



Route::group(['middleware' => 'auth'], function () {

Route::get("/admin/logout",[UserController::class,'logout'])->name('admin.logout');
Route::get("/",[DashboardController::class,'dashboard'])->name('dashboard');

Route::get("/tour-packages",[TourPackagesController::class,'tpackage'])->name('tour-packages');
Route::get("/manage-users",[ManageUsersController::class,'manageusers']);
Route::get("/tour-packages/form",[TourPackagesController::class,'createform']);
Route::post("/tour-packages/store",[TourPackagesController::class,'store'])->name('tour-packages.store');

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

});








































































