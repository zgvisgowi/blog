<?php

namespace App\Http\Controllers;


use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\CartService;

class CheckoutController extends Controller
{

    public function index(CartService $cart)
    {

        $checkout_items=$cart->get();
        $total=$cart->total();

        return view('checkout',compact('checkout_items','total'));

    }

    public function create(Request $request,CartService $cart)
    {
        $checkout_items=$cart->get();
        $total=$cart->total();

        $order=Order::create([
            'total'=>$total,
        ]);
        foreach($checkout_items as $item){
            $order->detail()->create([
                'table'=>$request['table'],
                'product_id'=>$item['id'],
                'cost'=>$item['cost'],
                'qty'=>$item['qty']
            ]);
        }

        return redirect('/');
    }

}
