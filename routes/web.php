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
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\AdminLoginController;
use App\Http\Controllers\Backend\UserController as BackendUserController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Frontend\ProductController as FrontendProduct;
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
// homepage product
Route::get('/',[HomepageController::class,'homepage'])->name('homepage');
Route::get('/login-registration',[UserController::class,'showLoginRegistration'])->name('login.registration.form');
Route::post('/registration',[UserController::class,'registration'])->name('registration');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');




//single product view
Route::get('/show/product/{product_id}',[FrontendProduct::class,'showProduct'])->name('product.show');
Route::get('/products/under/category/{category_id}',[FrontendProduct::class,'productsUnderCategory'])->name('products.under.category');




Route::group(['prefix'=>'admin'],function (){// admin login route
    Route::get('login',[BackendUserController::class,'loginForm'])->name('admin.login');
    Route::post('do-login',[BackendUserController::class,'doLogin'])->name('admin.dologin');




Route::group(['middleware'=>'admin-auth'],function (){
Route::get('/',[homeController::class,'home'])->name('home');
// admin
Route::get('/admin',[adminController::class,'admin'])->name('admin');
Route::get('logout',[BackendUserController::class,'logout'])->name('admin.logout');

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



// admin login

// category
Route::get('/category',[CategoryController::class,'category'])->name('category');
route::post('/category',[CategoryController::class,'create'])->name('category.create');
Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');


});
});
