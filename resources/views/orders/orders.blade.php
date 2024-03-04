@extends('layouts.layout')
@section('title','existing orders')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">order id</th>
            <th scope="col">data</th>
            <th scope="col">price</th>
            <th scope="col">order detals</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
        <tr>
            <th scope="row"></th>
            <td>{{$order->id}}</td>
            <td>{{$order->created_at}}</td>
            <td>{{$order->total}}</td>
            <td><a href="{{route('myorder.details',$order->id)}}">click to see detals</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection
