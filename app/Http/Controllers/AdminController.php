<?php

namespace App\Http\Controllers;

use App\Models\Costumer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(){
        return view('admins.index');
    }
    public function products(){
        $products=Product::all()->sortBy('time');
        return view('admins.products',['products'=>$products]);
    }
    public function costumer(){
        $costumers=Costumer::all();
        return view('admins.costumers',['costumers'=>$costumers]);
    }
    public function orders(){
        $orders=Order::all();
        return view('orders.orders_admin',['orders'=>$orders]);
    }
    public function order_details($id){
        $items=OrderDetail::where('order_id',$id)->get();

        return view('orders.order_details_admins',['items'=>$items]);
    }

    //
}
