@extends('admins.layout')
@section('title','register')
@section('content')
    <div>
        <form method="post" action="{{route('admin.signup')}}">
            @csrf
            <div class="form-group">
                <label for="adminName">Name</label>
                <input type="text" class="form-control" id="adminName" name="name"
                       placeholder="Enter your name" value="{{old('name')}}">
                @error('name')
                    <p class="alert alert-danger" role="alert">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="adminEmail">Email address</label>
                <input class="form-control" id="adminEmail" type="text" name="email"
                       placeholder="Enter email" value="{{ old('email') }}"/>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                @error('email')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="adminPassword">password</label>
                <input class="form-control" id="adminPassword" type="password" name="password"/>
                @error('password')
                    <p class="alert alert-danger">
                        {{$message}}
                    </p>
                @enderror
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="showPasswordCheckbox">
                <label class="form-check-label" for="showPasswordCheckbox">Show password</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

