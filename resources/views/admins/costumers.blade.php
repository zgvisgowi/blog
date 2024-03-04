@extends('admins.layout')

@section('title','costumers')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">costumer name</th>
            <th scope="col">costumer email</th>
            <th scope="col">costumer status</th>
            <th scope="col">costumer address</th>
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
