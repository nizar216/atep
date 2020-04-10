@extends('layouts.main')

@section('content')
    <div class="container product_section_container" style="padding: 30px;">
        <div class="row">
            <div class="col-md-12">
                {!!Form::model($userDetails, ['route' => ['profile.update', $userDetails->id], "method" =>  "put","files" => true])!!}
                {!! Form::bsText("phone","Phone") !!}
                {!! Form::bsText("address","Address") !!}
                {!! Form::bsText("city","City") !!}
                {!! Form::bsText("country","Country") !!}
                {!! Form::bsText("latlong","Localisation") !!}
                <button onclick="getLocation()" type="button" class="btn btn-success">Mettre a jour localisation</button>
                <div id='map' style='width: 400px; height: 300px;'></div>
                <script>
                mapboxgl.accessToken = 'pk.eyJ1Ijoibml6YXIyMTY4IiwiYSI6ImNrM3ZrYXB6NzBmODczcHFlbWo4MGhmdnYifQ.hEIBnpmr7vKeHf6LO_oXVQ';
                var map = new mapboxgl.Map({
                container: 'map',
                center:[10,30],
                style: 'mapbox://styles/mapbox/streets-v11',
                zoom:8,
                });
                </script>
                <script>
                var x = document.getElementById("latlong");
                function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else { 
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }
                }

                function showPosition(position) {
                x.value = position.coords.longitude+','+position.coords.latitude;
                var marker = new mapboxgl.Marker()
                .setLngLat([position.coords.longitude,position.coords.latitude])
                .addTo(map);
                map.flyTo({
                center: [
                    position.coords.longitude,position.coords.latitude
                ],
                essential: true // this animation is considered essential with respect to prefers-reduced-motion
                });
                }
                </script>

                {!! Form::bsSubmit("Update") !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection