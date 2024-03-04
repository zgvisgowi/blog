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
        $validated=$request->validate([
            'name'=>'required|min:4|max:100',
            'cost'=>'required',
            'image'=>'required'
        ]);
        if($request->hasFile('image')){
            $validated['image']=$request->file('image')->store('product_images','public');
        }
        Product::create($validated);

        return redirect()->route('admin.dashboard');

    }
    public function read(Product $product){
        return view('product.read',['product'=>$product]);
    }
    public function edit(Product $product)
    {
        return view('product.edit',['product'=>$product]);
    }
    public function update(Product $product, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:4|max:100',
            'cost' => 'required',
            'image' => 'nullable|image', // Adjust the validation rules as needed
        ]);

        // Check if an image is uploaded
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('product_images', 'public');
        }

        $product->update([
            'name' => $validated['name'],
            'cost' => $validated['cost'],
            'image' => isset($validated['image']) ? $validated['image'] : $product->image, // If no new image is provided, retain the old one
        ]);

        return redirect()->route('manage.products');
    }
    public function delete($id){
        $product=Product::find($id);

        $product->delete();
        return redirect()->route('admin.dashboard')->with(['message'=>'product deleted successful']);
    }
    //
}
