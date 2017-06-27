<?php

namespace App\Providers;
use Carbon\Carbon;
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
        //
        view()->composer('Admin.Admin',function($view){
            $dt = Carbon::now();
            $dt=$dt->toDateString();
            $firstPro=Product::Show_Product_All()->first();
            $firstPro=$firstPro->id;
            $type_product=TypeProduct::Show_Type_product()->get();
            $view->with(['type_product'=>$type_product,'today'=>$dt,'firstPro'=>$firstPro]);
        });
         view()->composer('Admin.Product_Admin',function($view){
                $type_product=TypeProduct::Show_Type_product()->get();
                $view->with('type_product',$type_product);
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
