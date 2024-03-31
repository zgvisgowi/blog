<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(){
        return view('admins.register');
    }
    public function signUp(Request $request){
        $validated=$request->validate([
            'name'=>'required|min:2|max:255',
            'email'=>'required|email|min:6|max:255|unique:users',
            'password'=>"required|min:6|max:255"
        ]);
        if($validated){

            $user=User::create([
                'name'=>$validated['name'],
                'email'=>$validated['email'],
                'password'=>Hash::make($validated['password'])
            ]);
            auth()->login($user);
            return redirect()->route('admin.dashboard');
        }


        return back()->withErrors($validated);
    }
    public function login(){
        return view('admins.login');
    }
    public function signIn(Request $request){
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
    public function forgotPassword(){
        return view('admins.forgotPassword');
    }


    public function addAdminForm(){
        return view('admins.sendemail');
    }
    public function deshboard(){
        return 0;
    }
    public function orders(){
        $orders=Order::all();

        return view('product.orders', ['orders'=>$orders]);
    }
    //*/
}
