@extends('layouts.layout')
@section('content')
    <div class="row">
        @if ($cart_items && count($cart_items) > 0)
            @foreach($cart_items as $item)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{ asset('/storage/'.$item['image']) }}">
                        <div class="card-body">
                            <p class="card-text">
                                {{ $item['name'] }}
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <form method="POST" action="/cart/{{ $item['id'] }}" class="row" class="mr-2">
                                        @csrf
                                        @method('PATCH')
                                        <input type="number" name="qty" value="{{ $item['qty'] }}" style="width: 50px;"
                                               min="1">
                                        <button type="submit" class="btn btn-sm btn-outline-success mr-2">განახლება
                                        </button>
                                    </form>
                                    <form action="/cart/{{ $item['id'] }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">წაშლა</button>
                                    </form>
                                </div>
                                <small class="text-muted">{{ $item['cost'] }} ₾</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-grid gap-2">
                <a class="btn btn-primary" href="/checkout">გადახდა</a>
            </div>
        @else
            <div>კალათა ცარიელია</div>
        @endif
    </div>
@endsection

