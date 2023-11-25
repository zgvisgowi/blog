<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class UserController extends Controller
{
    public function index(){

    }
    public function login(){
        return view('user.login');
    }
    public function sign_in(Request $request){
        $dataforlogin=$request->validate(
            [
                'email'=>['required','email'],
                'password'=>'required'
            ]);
        if(auth()->attempt($dataforlogin)) {
            $request->session()->regenerate();

            return redirect('/')->with('message','you are now logged in!');

        }
        return redirect()->back()->with('message','theis user does not exsist')->onlyInput('email');
    }
    public function LogOut(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function orders(){
        $orders=Order::all();

        return view('product.orders', ['orders'=>$orders]);
    }
    //
}
