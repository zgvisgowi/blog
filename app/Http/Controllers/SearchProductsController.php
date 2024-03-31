<?php

namespace App\Http\Controllers;

use App\Models\Product;

class SearchProductsController extends Controller
{
    public function index(){
        $query_str=request('query');
        $items=Product::matches($query_str)->get();
        return view('search',compact('items','query_str'));
    }
    //
}
