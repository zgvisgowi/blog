<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('product.create');
    }
    public function store(Request $request){
        $formfields=$request->validate([
            'name'=>'required|min:4|max:100',
            'cost'=>'required',
            'image'=>'required'
        ]);
        if($request->hasFile('image')){
            $formfields['image']=$request->file('image')->store('product_images','public');
        }
        Product::create($formfields);

        return redirect('/');

    }
    public function edit(Product $product)
    {
        return view('product.edit',['product'=>$product]);
    }
    public function manage(){
        $products=Product::all();

        return view('product.manage',['products'=>$products]);
    }
    //
}
