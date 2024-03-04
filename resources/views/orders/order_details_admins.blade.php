@extends('admins.layout')
@section('title','order-id')
@section('content')

    <h5 class="text-center">order id:#1</h5>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">product name</th>
            <th scope="col">qty</th>
            <th scope="col">cost</th>
            <th scope="col">product img</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
        <tr>
            <th scope="row"></th>
            <td>{{$item->product->name}}</td>
            <td>{{$item->qty}}</td>
            <td>{{$item->cost}}$</td>
        </tr>
        @endforeach
        </tbody>
    </table>


@endsection
