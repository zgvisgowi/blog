@extends('layouts.layout')
@section('title','payment is not don')
@section('content')
     <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-body">
            <h2 class="text-danger text-center">Transaction Canceled</h2>
            <p class="text-center">Your transaction has been canceled.</p>
            <p class="text-center">If you have any questions or concerns, please contact customer support.</p>
            <div class="text-center mt-4">
              <a href="{{route('index')}}" class="btn btn-primary">Return to Homepage</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection
