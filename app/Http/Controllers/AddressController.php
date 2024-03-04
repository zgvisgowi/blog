<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\address;

class AddressController extends Controller
{
    public function create(){
        return view('costumer.address');
    }
    public function store(Request $request){
        $validate=$request->validate([
            'street'=>'required|min:2|max:255',
            'city'=>'required|min:2|max:255',
            'state'=>'required|string|min:2|max:255',
            'postal_code'=>'required'
        ]);
        address::create([
            'street'=>$validate['street'],
            'city'=>$validate['city'],
            'state'=>$validate['state'],
            'postal_Code'=>$request->input('postal_code')/*$validate['postal_code']*/,
            'costumer_id'=>session('costumer')->id
        ]);
        return redirect()->route('myAddresses');
    }
    public function edit(address $address){
        return view('address.edit',['address'=>$address]);
    }
    public function update(address $address,Request $request){
        $validated=$request->validate(['
        ']);



        return redirect('/');
    }

    public function myAddresses(){
        $addresses=address::where('costumer_id',session('costumer')->id)->get();
        return view('costumer.readAddresses',['addresses'=>$addresses]);
    }
    //
}
