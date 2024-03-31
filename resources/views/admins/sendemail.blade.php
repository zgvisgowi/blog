@extends('admins.layout')
@section('title','create new admin')
@section('content')
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card">
          <div class="card-header bg-primary text-white">
            <h2 class="text-center">Send New Admin Creation Link</h2>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
              </div>
              <button type="submit" class="btn btn-primary btn-block">Send Link</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
