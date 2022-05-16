@extends('layout')
@section('pageTitle', 'Gallery')
@section('breadcrumb-first', 'Gallery')
@section('breadcrumb-second', 'Gallery')
@section('main')
<section class="mb30">
                <!--Silder-->
                

                <!--End Booking box-->
                <!--Slogan-->
                <div id="content">
                    
<div class="container-fluid">
    <div class="container contents" style="margin-top:25px">
        <div class="row mt20">
            <h2 style="text-align:center;color:#4F2D55">GALLERY</h2>
                    <div class="col-sm-4 mb20">
                        <a href="galleries/balcony-hotel-reception">
                            <div class="block-contain">
                                <img src="{{asset('images/Background/Balcony%20Hotel-%20Reception.jpg')}}" class="img-responsive">
                                <h4 style="color:#4F2D55">Balcony Hotel- Reception</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 mb20">
                        <a href="galleries/balcony-hotel-restaurant.html">
                            <div class="block-contain">
                                <img src="{{asset('images/Spa-dinning/Balcony%20Hotel_%20Restaurant%20(3).jpg')}}" class="img-responsive">
                                <h4 style="color:#4F2D55">Balcony Hotel-Restaurant</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 mb20">
                        <a href="galleries/balcony-hotel-service.html">
                            <div class="block-contain">
                                <img src="{{asset('images/Service/Balcony-%20Pool%20(3).jpg')}}" class="img-responsive">
                                <h4 style="color:#4F2D55">Balcony Hotel- Service</h4>
                            </div>
                        </a>
                    </div>
                        <div class="clearfix"></div>
                    <div class="col-sm-4 mb20">
                        <a href="galleries/balcony-hotel-accommodation-block-a.html">
                            <div class="block-contain">
                                <img src="{{asset('images/Rooms/Balcony%20Hotel-%20Superior%20City%20View%20(2).jpg')}}" class="img-responsive">
                                <h4 style="color:#4F2D55">Balcony Hotel- Accommodation Block A</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 mb20">
                        <a href="galleries/balcony-hotel-accommodation-block-b.html">
                            <div class="block-contain">
                                <img src="{{asset('images/Rooms/King%20Family%20Suite-%20Balcony%20B%20(4).jpg')}}" class="img-responsive">
                                <h4 style="color:#4F2D55">Balcony Hotel- Accommodation Block B</h4>
                            </div>
                        </a>
                    </div>
           

        </div>
    </div>
</div>
                </div>
            </section>
            @endsection