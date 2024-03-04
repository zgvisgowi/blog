@extends('layouts.layout')
@section('title','costumer-registration')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="mb-4">Customer Registration</h2>
            <form action="{{ route('costumer.signUp') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    @error('name')
                    <p class="alert-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
@endsection
