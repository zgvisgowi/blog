@extends('admins.layout')
@section('content')
    <div class="text-center">
        <form method="post" action="{{route('product.store')}}" enctype="multipart/form-data">
            @csrf
            <h1 class="mb-3 font-weight-normal">
                create product
            </h1>
            <div class="form-group mb-2">
                <label for="name" class="sr-only-focusable mb-2">title</label>
                <input type="text" name="name" class="form-control" placeholder="title" value="{{old('name')}}">
                @error('name')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="title" class="sr-only-focusable mb-2">price</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="number" name="cost" class="form-control" value="{{old('cost')}}"
                           aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                @error('cost')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlFile1" class="mb-2">Example file input</label>
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                @error('image')
                <p class="alert alert-danger">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">save</button>
        </form>
    </div>

@endsection
