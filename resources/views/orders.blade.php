@extends('layouts/main')

@section('content')

<div class="container" style="margin-top: 40px;">

    <div class="row">
        <div class="col-sm-12 locations text-center">
            <h2>ORDERS</h2><br><br>
            @if (count($orders) == 0)
                <p>You do not have an order yet</p>
            @else
                <table class="table table-bordererd table-hover">
                    <tr>
                        <th>Orders ID</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    @foreach($orders as $order)
                        <tr class="text-$order">
                            <td>PN-{{ $order->id }}</td>
                            <td>{{ $order->status }}</td>
                            <td><a href="/orders/{{$order->id}}" class="btn-sm btn-success">Detail</a></td>
                            @if($order->status=="Your order has been received")
                            <td>
                            <form action="{{ route('order.update',$order->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn-sm btn-primary">Delivrer</button>
                            </form>
                            </td>
                            @endif
                            </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>
</div><!-- Container /- -->
@endsection