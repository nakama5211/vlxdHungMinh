<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\TypeProduct;
use App\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['header','page.typeproduct','page.sanpham','section.sanphamnoibat'],function($view){
            $type =  TypeProduct::all();
            $view->with('type',$type);
        });
        view()->composer('section.sanphamnoibat',function($view)
        {
            $hotPro = Product::hotProduct()->get();
            $view->with('hotPro',$hotPro);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
