@extends('layout')
@section('pageTitle', 'Deluxe  City View Room')
@section('breadcrumb-first', 'Deluxe  City View Room')
@section('breadcrumb-second', 'Deluxe  City View Room')
@section('main')
<section class="mb30">
                <!--Silder-->
                

                <!--End Booking box-->
                <!--Slogan-->
                <div id="content">
                    

    <div class="container-fluid">
        <div class="row">
            <div class="container" style="position:relative">
                <a class="btn-cus-close" href="../accommodation.html"></a>
                <div class="container contents" style="padding-right:0;margin-top:25px">
                    <div class="row">
                        <div class="room-title col-sm-12 mb20">
                         <h3>@lang('messager.Room1Title')</h3>
                       </div>
                            <div class="col-sm-5 mb20">
                                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                        <li data-thumb="{{asset('images/Rooms/Balcony Hotel_ Family Room.jpg')}}">
                                            <img src="{{asset('images/Rooms/Balcony Hotel_ Family Room.jpg')}}" class="img-responsive">
                                        </li>
                                        <li data-thumb="{{asset('images/Rooms/Balcony Hotel_ Superior City View Twin (2).jpg')}}">
                                            <img src="{{asset('images/Rooms/Balcony Hotel_ Superior City View Twin (2).jpg')}}" class="img-responsive">
                                        </li>
                                        <li data-thumb="{{asset('images/Rooms/Balcony Hotel_ Family Room.jpg')}}">
                                            <img src="{{asset('images/Rooms/Balcony Hotel_ Family Room.jpg')}}" class="img-responsive">
                                        </li>
                                        <li data-thumb="{{asset('images/Rooms/Balcony Hotel_ Superior City View Twin (2).jpg')}}">
                                            <img src="{{asset('images/Rooms/Balcony Hotel_ Superior City View Twin (2).jpg')}}" class="img-responsive">
                                        </li>
                                        <li data-thumb="{{asset('images/Rooms/Balcony Hotel_ Family Room.jpg')}}">
                                            <img src="{{asset('images/Rooms/Balcony Hotel_ Family Room.jpg')}}" class="img-responsive">
                                        </li>
                                        <li data-thumb="{{asset('images/Rooms/Balcony Hotel_ Superior City View Twin (2).jpg')}}">
                                            <img src="{{asset('images/Rooms/Balcony Hotel_ Superior City View Twin (2).jpg')}}" class="img-responsive">
                                        </li>
                                </ul>
                            </div>

                            <div class="col-sm-7">
                            @lang('messager.Room1Detail')
                        </div>

                        <div class="clearfix mb20"></div>
                        <div class="col-sm-12 room-detail">
                        <div style="line-height: 20.8px;">
                        @lang('messager.Room1Content')
</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

<style>
    .room-detail ul {
        -webkit-padding-start: 40px;
    }
</style>

                </div>
            </section>
            @endsection