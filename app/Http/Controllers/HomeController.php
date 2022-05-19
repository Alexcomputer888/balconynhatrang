<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //mail
    public function create()
    {
        return view('mails.email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'name' => 'required',
          'phone' => 'required',
        ]);

        $data = [
          'subject' =>  'Balcony Hotel - Booking',
          'Adult' => $request->Adult,
          'Children' => $request->Children,
          'checkin' => $request->checkin,
          'checkout' => $request->checkout,
          'name' => $request->name,
          'phone' => $request->phone,
          'email' => $request->email,
          'emailhotel' => 'kensuyu1@gmail.com',
          'content' => $request->content,
        ];
        Mail::send('mails.email-template', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject'],['content'],['name'],['phone'],['Adult'],['Children'],['checkin'],['checkout']);
          $message->to($data['emailhotel'])
          ->subject($data['subject'],['content'],['name'],['phone'],['Cdult'],['Children'],['checkin'],['checkout']);
        });
        
        return back()->with(['message' => 'Email successfully sent!']);
    }
    // Loại phòng
    public function gotoRoomPage1()
    {
        return view('LoaiPhong.RoomPage1');
    }
    public function gotoRoomPage2()
    {
        return view('LoaiPhong.RoomPage2');
    }
    public function gotoRoomPage3()
    {
        return view('LoaiPhong.RoomPage3');
    }
    public function gotoRoomPage4()
    {
        return view('LoaiPhong.RoomPage4');
    }
    public function gotoRoomPage5()
    {
        return view('LoaiPhong.RoomPage5');
    }
    public function gotoRoomPage6()
    {
        return view('LoaiPhong.RoomPage6');
    }
    public function gotoRoomPage7()
    {
        return view('LoaiPhong.RoomPage7');
    }
    public function gotoRoomPage8()
    {
        return view('LoaiPhong.RoomPage8');
    }
// Dịch vụ
public function Services()
{
    return view('DichVu.DichVu1');
}
public function restaurant()
{
    return view('DichVu.DichVu2');
}
// Khuyến mãi
public function KhuyenMai()
{
    return view('KhuyenMai.KhuyenMai');
}
public function KhuyenMai1()
{
    return view('KhuyenMai.KhuyenMai1');
}
// khám phá 
public function DiepSonNhaTrang()
{
    return view('KhamPha.location1');
}
public function TenFood()
{
    return view('KhamPha.location2');
}
public function NhaTrangSpecialityCanCake()
{
    return view('KhamPha.location3');
}
public function TouristAttractionsNhaTrang()
{
    return view('KhamPha.location4');
}
public function BoNuongLacCanh()
{
    return view('KhamPha.location5');
}
public function VinhCamRanh()
{
    return view('KhamPha.location6');
}
public function BaiDai()
{
    return view('KhamPha.location7');
}
// Thư viện hình ảnh

    public function gallery()
    {
        return view('gallery.gallery');
    }
    public function gallery1()
    {
        return view('gallery.gallery1');
    }
    public function gallery2()
    {
        return view('gallery.gallery2');
    }
    public function gallery3()
    {
        return view('gallery.gallery3');
    }
    public function gallery4()
    {
        return view('gallery.gallery4');
    }
    public function gallery5()
    {
        return view('gallery.gallery5');
    }
}
