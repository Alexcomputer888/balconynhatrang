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
            <a class="btn-cus-close" href="../index.html"></a>
            <div class="container contents" style="padding-right:0;margin-top:25px">
                <div class="row">
                       <div class="col-sm-9 news-show">
                         @lang('messager.KP1Content')

                    </div>
                    <div class="col-sm-3 news-related">
                            <h3>ĐỊA ĐIỂM KHÁC</h3>
                            <div class="short-line"></div>
                            <div class="define mb20">
                                        <a href="/locations/10-mon-ngon">
                                            <img src="{{asset('images/nem-nuong(1).jpg')}}" class="img-responsive mCS_img_loaded">
                                            <h5>10 MÓN NGON KHÔNG THỂ BỎ QUA KHI ĐẾN NHA TRANG</h5>
                                        </a>
                                    </div>
                                    <div class="define mb20">
                                        <a href="/locations/nha-trang-speciality-can-cake">
                                            <img src="{{asset('images/can-cake-nha-trang-12-lifevietnamnet-1436.jpg')}}" class="img-responsive mCS_img_loaded">
                                            <h5>ĐẶC SẢN NHA TRANG - BÁNH CĂN</h5>
                                        </a>
                                    </div>
                                    <div class="define mb20">
                                        <a href="/locations/tourist-attractions-nha-trang">
                                            <img src="{{asset('images/Locations/Nha-tho-da-nha-trang.jpg')}}" class="img-responsive mCS_img_loaded">
                                            <h5>Các điểm du lịch nổi bật Nha Trang</h5>
                                        </a>
                                    </div>
                        </div>


                    <div class="clearfix mb20"></div>
                </div>

            </div>
        </div>
    </div>

</div>

</div>




            </section>
            @endsection
