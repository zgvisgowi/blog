@extends('admins.layout')

@section('title','my orders')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">street</th>
            <th scope="col">city</th>
            <th scope="col">state</th>
            <th scope="col">postal code</th>
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
