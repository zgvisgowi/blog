@extends('layout')
@section('content')
            <div class="row">
                <h3>შეკვეთის დეტალები</h3>
                <table class="table mt-4">
                    <thead>
                    <tr>
                        <th scope="col">ვინილი</th>
                        <th scope="col">ფასი</th>
                        <th scope="col">რაოდენობა</th>
                        <th scope="col">ჯამი</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($checkout_items as $item)
                        <tr>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['cost'] }} ₾</td>
                            <td>{{ $item['qty'] }}x</td>
                            <td>{{ $item['subtotal'] }} ₾</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="3">მთლიანი ჯამი {{ $total }} ₾</td>
                        <td class="justify-content-end">
                            <form method="post" action="/checkout">
                                @csrf
                                <input type="number" name="table">
                                <button type="submit" class="btn btn-primary">შეკვეთა</button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
@endsection


