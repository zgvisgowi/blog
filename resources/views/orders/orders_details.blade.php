@extends('layouts.layout')

@section('title','orders_detail')
@section('content')
    <h5 class="text-center">my order id:#1</h5>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">product name</th>
            <th scope="col">product image</th>
            <th scope="col">product price</th>
            <th scope="col">product img</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>luka</td>
            <td>click to see address</td>
            <td>167$</td>
            <td><a href="">click to see detals</a></td>
        </tr>
        </tbody>
    </table>


@endsection
