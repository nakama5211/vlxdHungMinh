<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductEditRequest;
use DB;
use File;
use Illuminate\Support\Facades\Input;
use App\Product;
use App\TypeProduct;
use App\Bill_Detail;
use Carbon\Carbon;
use App\User;
use App\News;
class Admin_Controller extends Controller
{
   public function ViewContent_Admin()
   {
      $MostViewProduct=Product::MostViewProduct();
      $Total_view= $MostViewProduct[1];
      $MostViewProduct=$MostViewProduct[0];
      $FindSumQuantity=Bill_Detail::FindSum_Quantity();
   	return view('Admin.Content_Admin',compact('MostViewProduct','Total_view','FindSumQuantity'));
   }
     //Hiện tất cả sản phẩm
   public function Select_Product(){
   	$product=Product::Show_Product_All()->paginate(5);
      $typepro=0;
   	return view('Admin.Product_Admin',compact('product','typepro'));
   }
   public function FindProductByType(Request $req){
   		$product=Product::Find_Product_By_Type($req->id)->paginate(5);
         $type=1;
   	return view('Admin.Product_Admin',compact('product','type'));
      }
       public function Edit_Product( $id, $name, $desc, $unit_price, $pro_price, $image, $unit){
      $pro=Product::Edit_Product($id,$name, $desc, $unit_price, $pro_price, $image, $unit);
      return $pro;
   }
      public function Insert_Product(Request $req){
      $filename="";
      $name = $req->input('name');
      $type = $req->input('new_type');
      $desc = $req->input('new_des');
      $unit_price = $req->input('new_unit_price');
      $pro_price = $req->input('new_pro_price');
      $unit = $req->input('new_unit');
         //    if($req->file('image')->isValid()){
         // $filename= $req->file('image')->getClientOriginalName();
         // $req->file('image')->move('image',$filename);
         $getId=Product::Insert_Product($name, $type, $desc, $unit_price, $pro_price, $unit);
      // }
      // if(Input::hasFile('image')){
      //    $image = Input::file('image')->getClientOriginalName();
      
      //  Input::file('image')->move('image', $image);
      // }
      return $getId;
   } 

     public function Select_User(){
      $user=User::User_All()->paginate(8);
  
      return view('Admin.User_Admin',compact('user'));
   }
   public function Edit_User( $id, $group){
      $user=User::Edit_User($id,$group);
   }
   public function Insert_User( $name, $email, $group){
      $getId=User::Insert_User($name,$email,$group);
       // return view('Admin.User_Admin','getId');
      return $getId;
   } 
   public function Delete_User( $id){
      $user=User::Delete_User($id);
   }

   public function Delete_Product( $id){
      $pro=Product::Delete_Product($id);
   }
   public function Delete_TypeProduct($id){
      $type=TypeProduct::Delete_Type_product($id);
   }
   public function ChartById_Admin($id,$created_at_from,$created_at_to){
         $chart=Bill_Detail::FindSum_QuantityById($id,$created_at_from,$created_at_to);
         $pro=Product::Show_Product_All()->get();
         return view('Admin.ChartById_Admin',compact('chart','pro'));
   }
   public function ViewProductbyDay(){
      $view=Product::ViewProductByDay();
   }
   public function ShowAllNews(){
      $news=News::Load_ALL_News()->get();
      return view('Admin.News_Admin',compact('news'));
   }

}
