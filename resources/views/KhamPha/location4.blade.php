@extends('layout')
@section('pageTitle', 'Deluxe City View Room')
@section('breadcrumb-first', 'Deluxe City View Room')
@section('breadcrumb-second', 'Deluxe City View Room')
@section('main')

<section class="mb30">
    <!--Silder-->


    <!--End Booking box-->
    <!--Slogan-->
    <div id="content">

        <div class="container-fluid">
            <div class="row">
                <div class="container" style="position:relative">
                    <a class="btn-cus-close" href="/"></a>
                    <div class="container contents" style="padding-right:0;margin-top:25px">
                        <div class="row">
                            <div class="col-sm-9 news-show">
                                <h3>Các điểm du lịch nổi bật Nha Trang</h3>
                                <div class="news-detail">
                                    <p><strong>Nhà thờ Chánh tòa Nha Trang</strong></p>

                                    <p>Nhà thờ Chánh Tòa Nha Trang là nhà thờ lớn nhất của thành phố Nha Trang, được xây dựng năm 1933 với đậm nét kiến trúc Gothic của Pháp và trang trí bằng các cửa sổ kính nhiều màu sắc. Nhà thờ được bao quanh bởi nhiều pho tượng các vị thánh và 4.000 ngôi mộ.&nbsp;Điểm độc đáo đó là nhà thờ chỉ được xây dựng bằng các khối xi măng đơn giản nhưng vẫn thanh lịch và hùng vĩ.<br>
                                        <em>Địa chỉ: Nằm ngay vòng xoay giữa đường Thái Nguyên và Nguyễn Trãi.<br>
                                            Đi từ Khách sạn Balcony Nha Trang: 8&nbsp;phút</em>
                                    </p>

                                    <p><img alt="Nhà thờ Chánh Tòa Nha Trang" src="{{asset('images/Locations/Nha-tho-Nui-03.jpg')}}" style="width: 800px; height: 534px;" class="mCS_img_loaded"></p>

                                    <p><strong style="line-height: 1.6em;">Bảo tàng Yersin</strong></p>

                                    <p>Bảo tàng nổi tiếng nhất Nha Trang chính là Bảo tàng Alexandre Yersin, nằm bên trong Viện Pasteur. Bảo&nbsp;tàng là nơi tưởng niệm cuộc đời làm việc cống hiến của một trong những nhà khoa học nổi tiếng nhất khu vực thời bấy giờ- người đã giúp chữa trị nhiều dịch bệnh trong những năm cuối thế kỷ 19, đầu thế kỷ 20.<br>
                                        <em>Địa chỉ: 10 Trần Phú<br>
                                            Đi từ Khách sạn Balcony Nha Trang: 7&nbsp;phút</em>
                                    </p>

                                    <p><img alt="" src="{{asset('images/Locations/3%20star%20hotel%20nha%20trang%20balcony_%20yersin%20museum%20nha%20trang%20(2).jpg')}}" style="width: 800px; height: 533px;" class="mCS_img_loaded"></p>

                                    <p><strong style="line-height: 1.6em;">Chợ Đầm</strong></p>

                                    <p>Chợ Đầm là một công trình kiến trúc đẹp, tọa lạc ngay vị trí trung tâm thành phố du lịch Nha Trang. Tại đây bán rất nhiều đồ lưu niệm và sản vật địa phương. Ngoài ra, ở đây cũng tập trung hải sản rất phong phú, đặc biệt là hải sản khô.<br>
                                        <em>Địa chỉ: đường Phan Bội Châu<br>
                                            Đi từ Khách sạn Balcony Nha Trang: 9&nbsp;phút</em>
                                    </p>

                                    <p><img alt="" src="{{asset('images/Locations/3%20star%20hotel%20nha%20trang%20balcony_%20Dam%20market.jpg')}}" style="width: 800px; height: 554px;" class="mCS_img_loaded"></p>

                                    <p><strong style="line-height: 1.6em;">Chùa Long Sơn</strong></p>

                                    <p>Được khởi công xây dựng vào năm 1886, sau đó bị sập sau một cơn bão, chùa Long Sơn đã trải qua nhiều lần trùng tu trên nền đất hiện đại từ những năm 1900 cho đến nay. Ngôi chùa nổi tiếng nhất Nha Trang tọa lạc gần đồi Trại Thủy với 152 bậc tam cấp dẫn từ chính điện lên đỉnh. Nổi bật trong lối kiến trúc Phật giáo của chùa là tượng Phật tổ nhập Niết bàn tại bậc thứ 44, quả đại hồng chung nặng 1.500 kg và bức Kim Thân Phật tổ ngồi thuyết pháp ở bậc cuối cùng.<br>
                                        <em>Địa chỉ: Đường Phật Học<br>
                                            Đi từ Khách sạn Balcony Nha Trang: 11&nbsp;phút</em>
                                    </p>

                                    <p><img alt="" src="{{asset('images/Locations/3%20star%20hotel%20nha%20trang%20balcony_%20long%20son%20pagoda.jpg')}}" style="width: 800px; height: 534px;" class="mCS_img_loaded"></p>

                                    <p><strong style="line-height: 1.6em;">Tháp Bà Ponagar</strong></p>

                                    <p>Cách trung tâm thành phố khoảng 2 km về phía Bắc và nằm trên đỉnh một ngọn đồi nhỏ cao khoảng 10-12 mét so với mực nước biển, Khu di tích Tháp Bà Ponagar Nha Trang được xây dựng từ thế kỷ thứ&nbsp;VII sau Công nguyên để thờ nữ thần Yan Po Nagar- người tạo dựng sản sinh gỗ quý, cây cối và lúa gạo trong tín ngưỡng của người Champa cổ.<br>
                                        Cho đến nay kỹ thuật xây dựng Tháp Bà Ponagar vẫn là điều bí ẩn, chưa ai hiểu được người Chăm đã làm cách nào để những viên gạch với kích cỡ 20x20cm cứ chồng khít lên nhau mà không cần bất kỳ một chất kết dính nào. Và đó là nét độc đáo khiến du khách thêm phần yêu thích ngôi đền tháp này.<br>
                                        <em>Địa chỉ: Gần cầu Xóm Bóng<br>
                                            Đi từ Khách sạn Balcony Nha Trang: 12 phút</em>
                                    </p>

                                    <p><img alt="" src="{{asset('images/Locations/3%20star%20hotel%20nha%20trang%20balcony_%20Cham%20Temple%20PoNagar%20Nha%20Trang.jpg')}}" style="width: 800px; height: 531px;" class="mCS_img_loaded"></p>

                                    <p><strong style="line-height: 1.6em;">Chợ Đêm Nha Trang ( Phố đi bộ)</strong></p>

                                    <p>“Phố đi bộ” là khu chợ đêm lớn nhất tại thành phố biển Nha Trang hiện nay và là nơi thả bộ, mua sắm, khám phá nét đẹp văn hóa bản địa không thể thiếu trong hành trình của lữ khách.<br>
                                        <em>Địa chỉ: Nằm cạnh Trung tâm hội nghị, 46 Trần Phú<br>
                                            Đi từ Khách sạn Balcony Nha Trang: 4 phút&nbsp;</em>
                                    </p>

                                    <p><img alt="" src="{{asset('images/Locations/nha-trang-3%20star%20hotel%20nha%20trang%20balcony_%20night%20market.jpg')}}" style="width: 800px; height: 462px;" class="mCS_img_loaded"></p>

                                    <p><strong style="line-height: 1.6em;">Bảo tàng Hải dương học</strong></p>

                                    <p>Mở cửa năm 1922, Bảo tàng Hải dương học lưu giữ hơn 20.000 mẫu vật sinh vật biển nhiệt đới. Đây là địa điểm du lịch không thể bỏ qua đối với những du khách yêu biển, yêu khám phá đời sống sinh vật biển đa dạng trong đại dương mênh mông, huyền bí.&nbsp;Điểm nhấn đặc biệt của bảo tàng đó là bộ xương cá voi lưng gù dài gần 18 mét (khai quật tại Hà Nam năm 1994), một mẫu vật tự nhiên vô giá.<br>
                                        <em>Địa chỉ: 1 Cầu Đá<br>
                                            Đi từ Khách sạn Balcony Nha Trang: 3 phút</em>
                                    </p>

                                    <p><em><img alt="" src="{{asset('images/Locations/3%20star%20hotel%20nha%20trang%20balcony_%20NATIONAL%20OCEANOGRAPHIC%20MUSEUM%20OF%20VIETNAM.jpg')}}" style="width: 800px; height: 535px;" class="mCS_img_loaded"></em></p>

                                    <p><strong><span style="line-height: 1.6em;">Hòn Chồng</span></strong></p>

                                    <p>Hòn Chồng là một danh thắng đẹp và độc đáo với nhiều tảng đá được chồng lên nhau một cách tự nhiên, đặc biệt trên tảng đá to nhất tại vị trí cao nhất có in dấu một bàn tay khổng lồ hằn sâu trong đá. Liên quan đến mỏm đá này, người dân miền biển truyền miệng nhau câu chuyện về ông khổng lồ một người khổng lồ đến xứ này ngoạn cảnh, gặp những nàng tiên đang tắm, ông dừng lại say sưa ngắm và vô tình trượt chân ngã, ông vội bám tay vào núi khiến sườn núi sụp đổ, đá văng xuống để lại vết tay ông hằn trên đá.<br>
                                        <em>Địa chỉ: Gần đường Phạm Văn Đồng, phường Vĩnh Phước<br>
                                            Đi từ Khách sạn Balcony Nha Trang: 15 phút</em>
                                    </p>

                                    <p><em><img alt="" src="{{asset('images/Locations/3%20star%20hotel%20Nha%20Trang%20Balcony_%20Hon%20Chong%20Nha%20Trang.jpg')}}" style="width: 800px; height: 535px;" class="mCS_img_loaded"></em></p>

                                    <p><strong>Sailing Club</strong></p>

                                    <p>Được mở cửa từ năm 1994, Sailing Club được xem là điểm vui chơi về đêm cho người dân địa phương, cũng như du khách quốc tế.&nbsp;Tại Sailing Club có tất cả những gì du khách cần như vị trí tuyệt đẹp ngay trên bờ biển Nha Trang, quầy bar ngoài trời, sàn nhảy, bàn billard, nhạc sôi động, thức ăn ngon và nhiều món thức uống độc đáo.<br>
                                        <em>Địa chỉ: 72 – 74 Trần Phú<br>
                                            Đi từ Khách sạn&nbsp;Balcony Nha Trang: 3 phút</em>
                                    </p>

                                    <p><em><img alt="" src="{{asset('images/Locations/3%20star%20hotel%20Nha%20Trang%20Balcony_sailing%20club%20nha%20trang%20(1).jpg')}}" style="width: 800px; height: 532px;" class="mCS_img_loaded"></em></p>

                                </div>
                                
                            </div>
                            <div class="col-sm-3 news-related">
                                <h3>ĐỊA ĐIỂM KHÁC</h3>
                                <div class="short-line"></div>
                                <div class="define mb20">
                                    <a href="/locations/diep-son-nha-trang">
                                        <img src="{{asset('images/18300955_1420333341338509_6463312596549226128_n.jpg')}}" class="img-responsive mCS_img_loaded">
                                        <h5>Điểm du lịch Điệp Sơn - Nha Trang</h5>
                                    </a>
                                </div>
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