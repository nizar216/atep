@extends('layouts/main')

@section('content')
        <!-- Checkout Content -->
        <div class="container-fluid no-padding checkout-content" style="margin-top: 50px;">
            <!-- Container -->
            <div class="container">
                <div class="row">
                    <!-- Order Summary -->
                    <div class="col-sm-12 locations text-left">
                        <div class="section-padding"></div>
                        <a href="{{ route('orders') }}" class="btn btn-xs btn-primary">
                            <i class="glyphicon glyphicon-arrow-left"></i> Return to orders
                        </a>
                        <br><br>
                        <h2>ORDER (PN-{{ $order->id }}) <br><br></h2>
                        <table class="table table-bordererd table-hover">
                            <tr>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                               
                            </tr>
                            @foreach($order->baskets->basket_products as $basket_product)
                                <tr>
                                    <td>
                                        <a href="{{ route('product', $basket_product->product->slug) }}">
                                            @foreach($basket_product->product->images as $image)
                                                <img class="img-responsive" style="width: 50px;"
                                                     src="/uploads/{{ $image->name }}">
                                            @endforeach
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('product', $basket_product->product->slug) }}">
                                            {{ $basket_product->product->product_name }}
                                        </a>
                                    </td>
                                    <td>{{ $basket_product->quantity }}</td>
                                </tr>
                            @endforeach
                            <div id='map' style='width: 400px; height: 300px;'></div>
                            <script>
                            mapboxgl.accessToken = 'pk.eyJ1Ijoibml6YXIyMTY4IiwiYSI6ImNrM3ZrYXB6NzBmODczcHFlbWo4MGhmdnYifQ.hEIBnpmr7vKeHf6LO_oXVQ';
                            var map = new mapboxgl.Map({
                            container: 'map',
                            center:[{{$order->latlong}}],
                            style: 'mapbox://styles/mapbox/streets-v11',
                            zoom:8,
                            });
                            </script>
                            <tr>
                                <th colspan="4" class="text-right">Status</th>
                                <td colspan="2">{{ $order->status }}</td>
                            </tr>
                        </table>
                    </div>


                </div>

            </div><!-- Container /- -->
            <div class="section-padding"></div>
        </div><!-- Checkout Content /- -->

    
@endsection