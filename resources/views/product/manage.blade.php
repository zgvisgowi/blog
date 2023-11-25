@extends('layout')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">სურათი</th>
            <th scope="col">სახელი </th>
            <th scope="col">ფასი</th>

        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td><img src="{{asset('/storage/'.$product->image)}}" class="tabel_img"></td>
                <td>{{$product->name}}</td>
                <td>{{$product->cost}}₾</td>
                <td><a class="btn btn-primary" href="/product/{{$product->id}}/edit">edit</a></td>
                <td><form action="/product/{Product}/delete" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">delete</button>
                    </form></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
