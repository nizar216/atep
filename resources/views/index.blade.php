@extends('layouts/main')

@section('content')
<div>
        <div class="container fill_height">
            <img src="{{ asset('assets/images/slider_1.jpg')}}" style="display: block;margin-left: auto;margin-right: auto" alt="faculte de pharmacie"  usemap="#image-map">

<map name="image-map">
    <area target="" alt="Donate" title="Donate" href="/contact#don" coords="468,325,592,356" shape="rect">
</map>
        </div>
    </div>
@endsection


@section('js')


    <script>

        $('.add_to_cart_button').find('a').click(function (event) {
            event.preventDefault();
            var quantity = $(this).parent().prev().find('input').val();
            $.ajax({
                type: "POST",
                url: $(this).attr('href'),
                data: {quantity: quantity}
                , success: function (data) {
                    console.log(data);
                    $('#checkout_items').html(data.cartCount);
                }
            });
            return false; //for good measure
        });
    </script>

@endsection
