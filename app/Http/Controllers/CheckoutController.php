<?php

namespace App\Http\Controllers;


use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\CartService;
use Stripe\Stripe;

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
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $sessionData=session()->all();
        $customerId = $sessionData['costumer']->id;
        $checkout_items=$cart->get();
        $total=$cart->total();

        $order=Order::create([
            'total'=>$total,
            'costumer_id'=>$customerId,
            'address_id'=>$request['address_id']
        ]);
        foreach($checkout_items as $item){
            $order->detail()->create([
                'product_id'=>$item['id'],
                'cost'=>$item['cost'],
                'qty'=>$item['qty']
            ]);
        }
            $lineItems = [];
        foreach ($checkout_items as $item) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'usd', // Change currency according to your needs
                    'unit_amount' => $item['cost'] * 100, // Amount in cents
                    'product_data' => [
                        'name' => $item['name'], // Provide the name of the product
                        // You can add more product data here if needed
                    ],
                ],
                'quantity' => $item['qty']
            ];
        }
        $checkout_session=\Stripe\Checkout\Session::create([
           'line_items'=>$lineItems,
            'mode'=>'payment',
            'success_url'=>route('checkout.success'),
            'cancel_url'=>route('checkout.cancel')

        ]);
         return redirect()->to($checkout_session->url);
    }

    public function success(){
        return view('success');

    }
    public function cancel(){
        return view('cancel');
    }

}
