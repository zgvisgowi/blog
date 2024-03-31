@extends('admins.layout')
@section('title','forgot password')
@section('content')
<div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-body">
            <h2 class="text-center">Forgot Password</h2>
            <p class="text-center">Enter your email address below and we'll send you a link to reset your password.</p>
            <form>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
            </form>
            <div class="text-center mt-3">
              <a href="login.html">Remembered your password? Log in</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

