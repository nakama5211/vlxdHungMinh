<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductEditRequest;
use DB;
use File;
use Illuminate\Support\Facades\Input;

class Admin_Controller extends Controller
{
   public function ViewContent_Admin()
   {
   	return view('Admin.Content_Admin');
   }
}
