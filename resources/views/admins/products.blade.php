@extends('admins.layout')
@section('title','manage products')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>name</th>
            <th>img</th>
            <th>cost</th>
        </tr>
        </thead>
        <tbody>
        @php
            $i=0;
        @endphp
        @foreach($products as $product)
        <tr>
            <td>
                {{++$i}}
            </td>
            <td>{{$product->name}}</td>
            <td>img 1</td>
            <td>{{$product->cost}}$</td>
            <td><a href="{{route('product.edit',$product->id)}}" class="btn btn-primary">edit</a></td>
            <td>
                <form action="{{route('product.delete',$product->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
