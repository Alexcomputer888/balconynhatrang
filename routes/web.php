<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'vi', 'cn', 'ru'])) {
        abort(400);
    }   
    session()->put('locale',$locale);
    return redirect()->back();
 
    //
});
Route::get('/email', [HomeController::class, 'create']);
Route::post('/email', [HomeController::class, 'sendEmail'])->name('send.email');
Route::get('/home/overview', function () {
    return view('GioiThieu.GioiThieu');
});
// Loại phòng

Route::get('/accommodation', function () {
    return view('LoaiPhong.RoomPage');
});
Route::get('room/Deluxe-city-view', [HomeController::class, 'gotoRoomPage1']);
Route::get('room/premier-deluxe-city', [HomeController::class, 'gotoRoomPage2']);
Route::get('room/senior-deluxe-room', [HomeController::class, 'gotoRoomPage3']);
Route::get('room/deluxe-family-room', [HomeController::class, 'gotoRoomPage4']);
Route::get('room/executive-family', [HomeController::class, 'gotoRoomPage5']);
Route::get('room/balcony-signature', [HomeController::class, 'gotoRoomPage6']);
Route::get('room/triple-city-view', [HomeController::class, 'gotoRoomPage7']);
Route::get('room/king-family-suite', [HomeController::class, 'gotoRoomPage8']);
// Dịch vụ

Route::get('/meeting-function/Services', [HomeController::class, 'Services']);
Route::get('/meeting-function/restaurant', [HomeController::class, 'restaurant']);
// Khuyến mãi

Route::get('/promotions', [HomeController::class, 'KhuyenMai']);
Route::get('/promotion/eternity-honeymoon-package', [HomeController::class, 'KhuyenMai1']);

// khám phá 
Route::get('/locations/diep-son-nha-trang', [HomeController::class, 'DiepSonNhaTrang']);
Route::get('/locations/10-mon-ngon', [HomeController::class, 'TenFood']);
Route::get('/locations/nha-trang-speciality-can-cake', [HomeController::class, 'NhaTrangSpecialityCanCake']);
Route::get('/locations/tourist-attractions-nha-trang', [HomeController::class, 'TouristAttractionsNhaTrang']);
Route::get('/locations/bo-nuong-lac-canh', [HomeController::class, 'BoNuongLacCanh']);
Route::get('/locations/vinh-cam-ranh', [HomeController::class, 'VinhCamRanh']);
Route::get('/locations/bai-dai', [HomeController::class, 'BaiDai']);
// Thư viện hình ảnh
Route::get('/gallery', [HomeController::class, 'gallery']);
Route::get('/galleries/balcony-hotel-reception', [HomeController::class, 'gallery1']);
Route::get('/galleries/balcony-hotel-restaurant', [HomeController::class, 'gallery2']);
Route::get('/galleries/balcony-hotel-service', [HomeController::class, 'gallery3']);
Route::get('/galleries/balcony-hotel-accommodation-block-a', [HomeController::class, 'gallery4']);
Route::get('/galleries/balcony-hotel-accommodation-block-b', [HomeController::class, 'gallery5']);
// Đặt phòng

Route::get('/RoomAvailable', function () {
    return view('DatPhong.DatPhong1');
});
// // Dịch vụ
// Services
// restaurant
// // Khuyến mãi
// EternityHoneymoonPackage
// // khám phá 
// DiepSonNhaTrang
// TenFood
// NhaTrangSpecialityCanCake
// TouristAttractionsNhaTrang
// BoNuongLacCanh
// VinhCamRanh
// BaiDai
// // Thư viện hình ảnh
// gallery