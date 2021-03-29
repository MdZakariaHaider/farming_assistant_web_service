<?php

use App\Http\Controllers\Backend\adminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\productController;
use App\Http\Controllers\Backend\agentController;
use App\Http\Controllers\backend\retailerController;
use App\Http\Controllers\backend\cropController;
use  App\Http\Controllers\backend\farmerController;
use App\Http\Controllers\backend\homeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[homeController::class,'home'])->name('home');

Route::get('/admin',[adminController::class,'admin'])->name('admin');



//agent
Route::get('/agent',[agentController::class,'agent'])->name('agent');
route::post('/agent',[agentController::class,'create'])->name('agent.create');


//retailer

Route::get('/retailer',[RetailerController::class,'retailer'])->name('retailer');
route::post('/retailer',[RetailerController::class,'create'])->name('retailer.create');


//product
Route::get('/product',[productController::class,'product'])->name('product');
route::post('/product',[ProductController::class,'create'])->name('product.create');

//crop

Route::get('/crop',[CropController::class,'crop'])->name('crop');
route::post('/crop',[CropController::class,'create'])->name('crop.create');

//farmer

Route::get('/farmer',[farmerController::class,'farmer'])->name('farmer');
route::post('/farmer',[FarmerController::class,'create'])->name('farmer.create');






