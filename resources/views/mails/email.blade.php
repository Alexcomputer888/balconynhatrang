@extends('layout')
@section('pageTitle', 'Reservations')
@section('breadcrumb-first', 'Reservations')
@section('breadcrumb-second', 'Reservations')
@section('main')

<!-- <form action="{{ route('send.email') }}" class="contact100-form validate-form" method="post">
    @csrf
    <span class="contact100-form-title">
        Contact Form
    </span>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

    <div class="wrap-input100 validate-input" data-validate="Name is required">
        <input class="input100" type="text" name="name" placeholder="Name">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
        </span>
        @error('name')
        <span class="text-danger"> {{ $message }} </span>
        @enderror
    </div>
    <div class="wrap-input100 validate-input" data-validate="Name is required">
        <input class="input100" type="number" name="phone" placeholder="phone">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-user" aria-hidden="true"></i>
        </span>
        @error('phone')
        <span class="text-danger"> {{ $message }} </span>
        @enderror
    </div>
    <div class="wrap-input100 validate-input" data-validate="Name is required">
        <input class="input100" type="number" name="Adult" placeholder="Adult" value="1">

    </div>
    <div class="wrap-input100 validate-input" data-validate="Name is required">
        <input class="input100" type="number" name="Children" placeholder="Children" value="0">

    </div>
    <div class="wrap-input100 validate-input" data-validate="Name is required">
        <input class="input100" type="date" name="checkin" placeholder="checkin">

    </div>

    <div class="wrap-input100 validate-input" data-validate="Name is required">
        <input class="input100" type="date" name="checkout" placeholder="checkout">

    </div>
    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
        <input class="input100" type="text" name="email" placeholder="Email">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-envelope" aria-hidden="true"></i>
        </span>
    </div>
    <div class="wrap-input100 validate-input" data-validate="Subject is required">
        <input class="input100" type="text" name="subject" placeholder="subject">
        <span class="focus-input100"></span>
        <span class="symbol-input100">
            <i class="fa fa-envelope" aria-hidden="true"></i>
        </span>
        @error('subject')
        <span class="text-danger"> {{ $message }} </span>
        @enderror
    </div>


    <div class="wrap-input100 validate-input" data-validate="Message is required">
        <textarea class="input100" name="content" placeholder="Message"></textarea>
        <span class="focus-input100"></span>
        @error('content')
        <span class="text-danger"> {{ $message }} </span>
        @enderror
    </div>

    <div class="container-contact100-form-btn">
        <button type="submit" class="contact100-form-btn">
            Send
        </button>
    </div>
</form> -->

<section class="mb90">
    <!--Silder-->
    <!--End Booking box-->
    <!--Slogan-->
    <div id="content">


        <div class="container">
            <div class="text-center" id="slogant">
                <h1>ĐẶT PHÒNG</h1>
            </div>
            <div id="crumbs">
                <ul>

                    <li><a href="/RoomAvailable" class="active">Phòng &amp; Giá</a></li>
                    <li><a href="#4">Thông tin đăng ký</a></li>
                    <li><a href="#3">Xác nhận</a></li>
                </ul>
            </div>


            <div class="m-t-10">
                <div class="col-sm-12 col-xs-12  m-b-10 p-l-0">

                    <form action="{{ route('send.email') }}" class="contact100-form validate-form" method="post">
                        @csrf
                        <div class="booking-form">
                            <div class="header">
                                @lang('messager.ReservationForm')
                            </div>
                            @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                        @endif
                        <div class="form-group col-sm-3 col-xs-12">
                            <label> @lang('messager.Check In') </label>
                        
                            <div class="input-group" id="Scheck_in">
                                
                                <input type="text" class="form-control " name="checkin">
                                <div class="input-group-addon "><i class="fa fa-calendar"></i></div>
                            </div>
                            @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 col-xs-12">
                            <label> @lang('messager.Check In') </label>
                        
                            <div class="input-group" id="Scheck_out">
                                
                                <input type="text" class="form-control " name="checkout">
                                <div class="input-group-addon "><i class="fa fa-calendar"></i></div>
                            </div>
                            @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="form-group col-sm-3 col-xs-12">
                            <label class="control-label">@lang('messager.Adult(s)')</label>
                            <input class="form-control"  min="1" name="Adult" type="number" value="1">
                        </div>
                        <div class="form-group col-sm-3 col-xs-12">
                            <label class="control-label">@lang('messager.Children')</label>
                            <input class="form-control"  min="0" name="Children" type="number" value="0">
                        </div>

                        <div class="form-group col-sm-6 col-xs-12">
                            <label class="control-label">Mail</label>
                            <input class="form-control" type="text" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-sm-3 col-xs-12">
                            <label class="control-label">@lang('messager.Name')</label>
                            <input class="form-control" type="text" name="name" placeholder="@lang('messager.Name')">
                        </div>
                        <div class="form-group col-sm-3 col-xs-12">
                            <label class="control-label">@lang('messager.Phone')</label>
                            <input class="form-control" type="number" name="phone" placeholder="@lang('messager.Phone')">
                        </div>

                        <!-- <div class="wrap-input100 validate-input" data-validate="Name is required">
                            <input class="input100" type="text" name="name" placeholder="Name">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                            @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div> -->
                        <!-- <div class="wrap-input100 validate-input" data-validate="Name is required">
                            <input class="input100" type="number" name="phone" placeholder="phone">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                            @error('phone')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div> -->
                        <!-- <div class="wrap-input100 validate-input" data-validate="Name is required">
                            <input class="input100" type="number" name="Adult" placeholder="Adult" value="1">

                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                            <input class="input100" type="number" name="Children" placeholder="Children" value="0">

                        </div> -->
                        <!-- <div class="wrap-input100 validate-input" data-validate="Name is required">
                            <input class="input100" type="date" name="checkin" placeholder="checkin">

                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                            <input class="input100" type="date" name="checkout" placeholder="checkout">

                        </div> -->
                        <!-- <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <input class="form-control" type="text" name="email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div> -->
                        <!-- <div class="wrap-input100 validate-input" data-validate="Subject is required">
                            <input class="input100" type="text" name="subject" placeholder="subject">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                            @error('subject')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div> -->

                        

                        <!-- <div class="wrap-input100 validate-input" data-validate="Message is required">
                            <textarea class="input100" name="content" placeholder="Message"></textarea>
                            <span class="focus-input100"></span>
                            @error('content')
                            <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div> -->
                        <button class="btn btn-success m-l-15 btn-checkbooking mb15" type="submit">Tiếp tục</button>
                        </div>
                        
                    </form>

                    </form>
                    <div class="clearfix mb30"></div>

                    <style>
                        table.booking-info {
                            width: 100%;
                            /*margin:20px auto;*/
                        }

                        table.booking-info tr td {
                            padding: 25px 10px 0px 10px;
                            vertical-align: bottom;
                        }

                        table.booking-info tr td:nth-child(odd) {
                            width: 60%;
                        }

                        table.booking-info tr td:nth-child(even) {
                            text-align: right;
                        }

                        table.booking-info tr {
                            border-bottom: 1px solid #dadada;
                        }
                    </style>
                </div>

            </div>
        </div>



    </div>
</section>
@endsection