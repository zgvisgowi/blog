@extends('layout')
@section('content')
    <div class="text-center">
        <form method="post" action="/storeProduct" enctype="multipart/form-data">
            @csrf
            <h1 class="mb-3 font-weight-normal">
                edit {{$product->name}}
            </h1>
            <div class="form-group mb-2">
                <label for="name" class="sr-only-focusable mb-2">title</label>
                <input type="text" name="name" class="form-control" placeholder="title" value="{{$product->name}}">
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
                    <input type="number" name="cost" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{$product->cost}}">
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
                <img src="{{asset('/storage/'.$product->image)}}" class="w-100 h-50">
            </div>
            <button type="submit" class="btn btn-success">update</button>
        </form>
    </div>

@endsection
