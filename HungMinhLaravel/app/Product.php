<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{
    protected $table='products';
    public function type_products(){
    	return $this->belongsTo('App\TypeProduct','id_type','id');
    }
    public function bill(){
    	return $this->hasManyThrough('App\Bill','App\BillDetail','id_product','id');
    }
    public static function hotProduct()// tim san pham SAT noi bat
    {
    	$hotPro = DB::table('products')
    				->where('view','>','9');
            return $hotPro;

    }
}
