<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ManageUsersController;
use App\Http\Controllers\TourPackagesController;



Route::get('/', function () {
    return view('admin.master');
});

Route::get("/",[DashboardController::class,'dashboard']);
Route::get("/tour-packages",[TourPackagesController::class,'tpackage']);
Route::get("/manage-users",[ManageUsersController::class,'manageusers']);







































































