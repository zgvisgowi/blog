@extends('layouts.layout')

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
        @foreach($addresses as $address)
            <tr>
                <th scope="row"></th>
                <td>{{$address->street}}</td>
                <td>{{$address->city}}</td>
                <td>{{$address->state}}</td>
                <td>{{$address->postal_code}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
