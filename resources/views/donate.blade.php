@extends('layouts.main')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/contact_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/contact_responsive.css')}}">
@endsection


@section('content')
    <div class="container contact_container">

        <!-- Map Container -->

        <div class="row">
        <div class="container fill_height">
        <img src="{{ asset('assets/images/Donate.jpg')}}" usemap="#image-map" style="width:100%;height:100%;display: block;margin-left: auto;margin-right: auto">
        </div>
        </div>

        <!-- Contact Us -->

        <div class="row">

            <div class="col-lg-6 contact_col">
            <a id="don"></a>
                <div class="contact_contents">
                    <h1>How to donate</h1>
                    <div>
                        <p>Aziz kadoue:55557416</p>
                        <p>Jaber chamseddine:55275660</p>
                        <p>Chedy ghram:55489709</p>
                    </div>
            </div>
        </div>
    </div>


    
@endsection

@section('js')
@endsection