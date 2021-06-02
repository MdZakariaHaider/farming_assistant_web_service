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
use App\Http\Controllers\Backend\ReportController;

use App\Http\Controllers\Frontend\ProductController as FrontendProduct;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\ProfileController;


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
Route::get('/reg', [UserController::class, 'reg'])->name('reg');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
//for cart
Route::get('/product/cart/{id}',[FrontendCartController::class,'cart'])->name('product.cart');

//for add-to-cart
Route::get('/product/carts',[CartController::class,'cart'])->name('carts');

Route::get('/add-to-cart/{id}',[CartController::class,'addToCart'])->name('addToCart');

Route::get('/productRemove/{id}',[CartController::class,'productRemove'])->name('productRemove');

Route::post('/orderConfirm',[CartController::class,'orderConfirm'])->name('orderConfirm');




//single product view

Route::get('/products/under/category/{category_id}',[FrontendProduct::class,'productsUnderCategory'])->name('products.under.category');


Route::group(['middleware'=>'auth'],function(){
    Route::get('/show/product/{product_id}',[FrontendProduct::class,'showProduct'])->name('product.show');
    Route::get('/show/product/show/{id}',[BookingController::class,'showProduct'])->name('show.product');
    Route::post('/booking',[BookingController::class,'booking'])->name('product.booking');

});
//booking

// Profile
Route::get('profile',[ProfileController::class,'showProfile'])->name('profile.show');




Route::group(['prefix'=>'admin'],function (){// admin login route
    Route::get('login',[BackendUserController::class,'loginForm'])->name('admin.login');
    Route::post('do-login',[BackendUserController::class,'doLogin'])->name('admin.dologin');




Route::group(['middleware'=>'admin-auth'],function (){
Route::get('/home',[homeController::class,'home'])->name('home');


// admin
Route::get('/admin',[adminController::class,'admin'])->name('admin');
Route::get('logout',[BackendUserController::class,'logout'])->name('admin.logout');



//agent
Route::get('/agent',[agentController::class,'agent'])->name('agent');
route::post('/agent',[agentController::class,'create'])->name('agent.create');
Route::get('/agent/delete/{id}',[agentController::class,'delete'])->name('agent.delete');
Route::get('/agent/edit/{id}',[agentController::class,'editAgent'])->name('agent.edit');
Route::put('/agent/update/{id}',[agentController::class,'updateAgent'])->name('agent.update');

//retailer

Route::get('/retailer',[RetailerController::class,'retailer'])->name('retailer');
route::post('/retailer',[RetailerController::class,'create'])->name('retailer.create');
Route::get('/retailer/delete/{id}',[RetailerController::class,'delete'])->name('retailer.delete');
Route::get('/retailer/edit/{id}',[RetailerController::class,'editRetailer'])->name('retailer.edit');
Route::put('/retailer/update/{id}',[RetailerController::class,'updateRetailer'])->name('retailer.update');


//product
Route::get('/product',[productController::class,'product'])->name('product');
route::post('/product',[ProductController::class,'create'])->name('product.create');
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
Route::get('/product/edit/{id}',[ProductController::class,'editProduct'])->name('product.edit');
Route::put('/product/update/{id}',[ProductController::class,'updateProduct'])->name('product.update');
Route::post('/product/search',[ProductController::class,'search'])->name('product.search');

//crop

Route::get('/crop',[CropController::class,'crop'])->name('crop');
route::post('/crop',[CropController::class,'create'])->name('crop.create');
Route::get('/crop/delete/{id}',[CropController::class,'delete'])->name('crop.delete');
Route::get('/crop/edit/{id}',[CropController::class,'editCrop'])->name('crop.edit');
Route::put('/crop/update/{id}',[CropController::class,'updateCrop'])->name('crop.update');

//farmer

Route::get('/farmer',[farmerController::class,'farmer'])->name('farmer');
route::post('/farmer',[FarmerController::class,'create'])->name('farmer.create');
Route::get('/farmer/delete/{id}',[FarmerController::class,'delete'])->name('farmer.delete');
Route::get('/farmer/edit/{id}',[FarmerController::class,'editFarmer'])->name('farmer.edit');
Route::put('/farmer/update/{id}',[FarmerController::class,'updateFarmer'])->name('farmer.update');

//investment
Route::get('/investment',[InvestmentController::class,'investment'])->name('investment');
route::post('/investment',[InvestmentController::class,'create'])->name('investment.create');
Route::get('/investment/delete/{id}',[InvestmentController::class,'delete'])->name('investment.delete');
Route::get('/investment/edit/{id}',[InvestmentController::class,'editInvestment'])->name('investment.edit');
Route::put('/investment/update/{id}',[InvestmentController::class,'updateInvestment'])->name('investment.update');



//dashboard
Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');


// order
Route::get('/order',[OrderController::class,'order'])->name('order');



// admin login

// category
Route::get('/category',[CategoryController::class,'category'])->name('category');
route::post('/category',[CategoryController::class,'create'])->name('category.create');
Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
Route::get('/category/edit/{id}',[CategoryController::class,'editCategory'])->name('category.edit');
Route::put('/category/update/{id}',[CategoryController::class,'updateCategory'])->name('category.update');


//report
Route::get('/Report',[ReportController::class,'Report'])->name('Report');
Route::get('/ReportGenerate',[ReportController::class,'ReportGenerate'])->name('ReportGenerate');


});
});
