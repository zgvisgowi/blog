@extends('layouts.layout')

@section('title','success')

@section('content')
 <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-body">
            <h2 class="text-success text-center">Transaction Successful</h2>
            <p class="text-center">Thank you for your purchase!</p>
            <p class="text-center">Your transaction was successful. You will receive a confirmation email shortly.</p>
            <div class="text-center mt-4">
              <a href="{{route('index')}}" class="btn btn-primary">Continue Shopping</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
