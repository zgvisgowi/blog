@extends('layouts')
@section('title','edit address')

@section('content')
    <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="street" class="form-label">Street Address</label>
            <input type="text" class="form-control" id="street" name="street" placeholder="Enter street address" value="{{ old('street') }}" required>
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Enter city" value="{{ old('city') }}" required>
        </div>
        <div class="mb-3">
            <label for="state" class="form-label">State</label>
            <input type="text" class="form-control" id="state" name="state" placeholder="Enter state" value="{{ old('state') }}" required>
        </div>
        <div class="mb-3">
            <label for="postal_code" class="form-label">Postal Code</label>
            <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="Enter postal code" value="{{ old('postal_code') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
