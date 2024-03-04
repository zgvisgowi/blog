@extends('layouts.layout')

@section('title', 'Create Address')

@section('content')
    <div class="container">
        <h1>Create Address</h1>

        <form method="POST" action="{{ route('addresses.store') }}">
            @csrf

            <div class="form-group">
                <label for="street">Street:</label>
                <input type="text" class="form-control" id="street" name="street" required>
                @error('street')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" name="city" required>
                @error('city')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="postal_code">Postal Code:</label>
                <input type="text" class="form-control" id="postal_code" name="postal_code" required>
                @error('postal_code')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror

            </div>

            <div class="form-group">
                <label for="state">Country:</label>
                <input type="text" class="form-control" id="state" name="state" required>
                @error('state')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create Address</button>
        </form>
    </div>
@endsection
