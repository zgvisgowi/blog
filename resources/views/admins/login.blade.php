@extends('admins.layout')
@section('title','login')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center"><h2>Please Sign In</h2></div>

                    <div class="card-body">
                        <form method="post" action="{{route('admin.signIn')}}">
                            @csrf

                            <div class="form-group">
                                <label for="email" class="sr-only">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" required autofocus>
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
                            </div>
                            <div class="text-center">
                                <p>Don't have an account? <a href="{{route('admin.register')}}">Register Here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
