@extends('layouts.layout')
@section('content')
@include('partials.search')
    <div class="row">
        @foreach($items as $item)
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top"
                         src="{{$item->image ? asset('storage/'.$item->image):'https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg' }}">
                    <div class="card-body">
                        <p class="card-text">
                            {{ $item->name }}
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <form action="/add_to_cart" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit" class="btn btn-sm btn-outline-primary">დამატება</button>
                                </form>
                            </div>
                            <small class="text-muted">{{ $item->cost }} ₾</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

