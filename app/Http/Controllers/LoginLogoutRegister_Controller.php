<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductEditRequest;
use DB;
use File;
use Illuminate\Support\Facades\Input;
use Hash;
use Auth;
use App\User;

class LoginLogoutRegister_Controller extends Controller
{
   public function Login()
   {
   	return view('page.dangnhap');
   }

    public function postRegister(Request $req){
        $this->validate($req,['email'=>'required|email', 'full_name'=>'required', 'password'=>'required|min:6|max:10', 'phone'=>'numeric', 're_password'=>'required|same:password'
            ],['email.reuired'=>'Vui lòng nhập Email',
                'email.email'=>'Email không đúng định dạng',
                'Phone.numeric'=>'Điện thoại phải thuộc kiểu số',
                'password.redirect'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 ký tự',
                're_password.same'=>'Mật khẩu không khớp'
            ]);
        // DB::table('users')->insert([
        // 		'full_name'=>'lam'
        // 	]);
        $user = new User();
        $user->full_name = $req->full_name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;

        $user->save();
    //     $user = $user->toArray();
    //     Mail::send('page.mail',['nguoidung'=>$user], function ($message ) use($user)
    // {
    //     $message->from('manam5211@gmail.com', 'Web bán bánh');
    //     $message->to($user['email'], $user['full_name']);
    //     $message->subject('Submit password');
    // });

       return redirect()->back()->with('thongbao','Đăng ký thành công, Vui lòng kiểm tra Email');
    }

   public function Register()
   {
   		return view('page.dangky');
   }
   public function postLogin(Request $req){
        if(Auth::attempt(['email'=>$req->email,'password'=>$req->password,'active'=>0])){
                return redirect()->route('home');
        }
        else{
            return redirect()->back()->with('thatbai','Sai thông tin đăng nhập');
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
