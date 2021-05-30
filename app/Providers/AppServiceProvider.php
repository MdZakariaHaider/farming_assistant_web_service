<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        $cats=Category::all();
        $products=Product::all();


        View::share('categories', $cats);
        View::share('products', $products);
        // $count=0;

    $productCount = Cart::all();

    // dd( $request->quantity );
    view()->share('product_count',$productCount);

    // dd($foodItemCount);


    }


}
