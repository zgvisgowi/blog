@extends('layout')
@section('content')
    <div class="text-center">
    <form method="post" action="/signIn">
        @csrf
        <h1 class="h3 mb-3 font-weight-normal">please sign in</h1>
        <div class="form-group">
            <label for="EmailAddress" class="sr-only">Email address</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="email@email.com" required autofocus>
            @error('email')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" placeholder="password"
            class="form-control">
            @error('password')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="mt-3">
            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Log In">
        </div>
    </form>
    </div>
@endsection
