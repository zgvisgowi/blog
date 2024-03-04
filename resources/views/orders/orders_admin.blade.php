@extends('admins.layout')
@section('title','existing orders')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">costumer</th>
            <th scope="col">address</th>
            <th scope="col">price</th>
            <th scope="col">order detals</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <th scope="row">1</th>
                <td>{{$order->costumer->name}}</td>
                <td>click to see address</td>
                <td>167$</td>
                <td><a href="{{route('order.details',$order->id)}}">click to see detals</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
