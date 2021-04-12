<?php

use App\Http\Controllers\Backend\adminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\productController;
use App\Http\Controllers\Backend\agentController;
use App\Http\Controllers\backend\retailerController;
use App\Http\Controllers\backend\cropController;
use  App\Http\Controllers\backend\farmerController;
use App\Http\Controllers\backend\homeController;
use App\Http\Controllers\Backend\InvestmentController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\Frontend\HomepageController;

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

// admin
Route::get('/admin',[adminController::class,'admin'])->name('admin');



//agent
Route::get('/agent',[agentController::class,'agent'])->name('agent');
route::post('/agent',[agentController::class,'create'])->name('agent.create');
Route::get('/agent/delete/{id}',[agentController::class,'delete'])->name('agent.delete');

//retailer

Route::get('/retailer',[RetailerController::class,'retailer'])->name('retailer');
route::post('/retailer',[RetailerController::class,'create'])->name('retailer.create');
Route::get('/retailer/delete/{id}',[RetailerController::class,'delete'])->name('retailer.delete');

//product
Route::get('/product',[productController::class,'product'])->name('product');
route::post('/product',[ProductController::class,'create'])->name('product.create');
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');


//crop

Route::get('/crop',[CropController::class,'crop'])->name('crop');
route::post('/crop',[CropController::class,'create'])->name('crop.create');
Route::get('/crop/delete/{id}',[CropController::class,'delete'])->name('crop.delete');

//farmer

Route::get('/farmer',[farmerController::class,'farmer'])->name('farmer');
route::post('/farmer',[FarmerController::class,'create'])->name('farmer.create');
Route::get('/farmer/delete/{id}',[FarmerController::class,'delete'])->name('farmer.delete');

//investment
Route::get('/investment',[InvestmentController::class,'investment'])->name('investment');
route::post('/investment',[InvestmentController::class,'create'])->name('investment.create');
Route::get('/investment/delete/{id}',[InvestmentController::class,'delete'])->name('investment.delete');


//dashboard
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');


// order
Route::get('/order',[OrderController::class,'order'])->name('order');


// homepage product
Route::get('/homepage',[HomepageController::class,'homepage'])->name('homepage');
