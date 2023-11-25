@extends('layout')
@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">შეკვეთა</th>
        <th scope="col">ჯამური ფასი</th>
        <th scope="col">მაგიდა</th>

    </tr>
    </thead>
    <tbody>
    @php
    $i=0;
    @endphp
    @foreach($orders as $order)
        <tr>
            <td>
                @php
                $i++;
                echo $i;
                @endphp
            </td>
            <td>
                {{$order->total}}
            </td>
            <td>
                {{$order->table}}
            </td>
        </tr>

    @endforeach
    </tbody>
</table>
@endsection
