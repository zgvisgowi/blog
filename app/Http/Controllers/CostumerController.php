<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\OrderDetail;



class CostumerController extends Controller
{
    public function register(){
        return view('costumer.register');
    }

    public function signUp(Request $request){
        $validated=$request->validate([
            'name'=>'required|min:2|max:255|string',
            'email'=>'required|min:3|max:255|email|unique:costumers',
            'password'=>'required|min:8|max:255'
        ]);
        $costumer=Costumer::create(
          [
              'name'=>$validated['name'],
              'email'=>$validated['email'],
              'password'=>Hash::make($validated['password'])
          ]);
        $request->session()->put('costumer',$costumer);
        return redirect('/');
    }
    public function logIn(){
        return view('costumer.login');
    }
    public function signIn(Request $request){
        $validated=$request->validate([
            'email'=>'required|email|min:6|max:255',
            'password'=>'required|min:8|max:255'
        ]);
        $costumer=Costumer::where('email',$request->email)->first();
        if(!$costumer || ($costumer && !Hash::check($request->password,$costumer->password))){
            return redirect()->back()->with('login_failed',true);
        }
        $request->session()->put('costumer',$costumer);

        return redirect('/');
    }
    public function logout(Request $request){
        $request->session()->forget('costumer');
        return redirect('/');
    }
    public function myOrders(){
        $id=session('costumer')->id;
        $orders=Order::where('costumer_id',$id)->get();
        return view('orders.orders',['orders'=>$orders]);
    }
    public function order_details($order_id){
        $items=OrderDetail::where('order_id',$order_id)->get();

        return view('orders.orders_details',['items'=>$items]);
    }
    //
}
