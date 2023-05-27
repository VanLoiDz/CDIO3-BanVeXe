@extends('client.share.master')
@section('noi-dung')
    <!-- Slider -->
    <div class="fr-slider-wrap">
        <div class="fr-slider">
            <ul class="slides">
                <li>
                    <img src="/assets/image/anh1.jpg" alt="">
                    <div class="fr-slider-cont">
                        <h3 style="color: red">MEGA SALE -30%</h3>
                        <p style="color: rgb(241, 218, 8)">Winter collection for women's. <br>We all have choices for you. Check it out!</p>
                        <p class="fr-slider-more-wrap">
                            <a class="fr-slider-more" href="/chi-tiet">Xem Ngay</a>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="/assets/image/anh2.jpg" alt="">
                    <div class="fr-slider-cont">
                        <h3 style="color: red">NEW COLLECTION</h3>
                        <p style="color: rgb(186, 235, 11)">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>Aliquam consequuntur
                            dolorem doloribus fuga harum</p>
                        <p class="fr-slider-more-wrap">
                            <a class="fr-slider-more" href="/chi-tiet">Đặt Vé Ngay</a>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="/assets/image/anh3.jpeg" alt="">
                    <div class="fr-slider-cont">
                        <h3 style="color: red">SUMMER TRENDS</h3>
                        <p style="color: rgb(185, 233, 11)">Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>Aliquam consequuntur
                            dolorem doloribus fuga harum</p>
                        <p class="fr-slider-more-wrap">
                            <a class="fr-slider-more" href="/chi-tiet">Xem Chi Tiết</a>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <h5 style="color: tomato;">Liên hệ với chúng tôi</h5>
                    <p>
                        Cảm ơn bạn đã ghé thăm website của chúng tôi.
                        Nếu bạn muốn nhận được thông tin từ chúng tôi dễ dàng,
                        hãy điền vào form dưới đây.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Họ và tên *</label>
                        <input type="email" class="form-control" placeholder="Nhập họ tên">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Số điện thoại *</label>
                        <input type="email" class="form-control" placeholder="Nhập số điện thoại">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email *</label>
                        <input type="email" class="form-control" placeholder="Nhập email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tiêu đề *</label>
                        <input type="email" class="form-control" placeholder="Nhập tiêu đề">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Nội dung *</label>
                        <textarea class="form-control" placeholder="Nhập nội dung" rows="3"></textarea>
                    </div>
                    <div class="mb-3 text-end">
                        <button type="button" class="btn btn-success">Gửi đi</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe id="MapModal"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d502.25921041061355!2d108.44553049647082!3d11.92678772504109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134e578310a406b%3A0x51f3ae693880e521!2zQ8O0bmcgVHkgQ-G7lSBQaOG6p24gWGUgS2jDoWNoIFBoxrDGoW5nIFRyYW5nIEZ1dGFidXNsaW5lcw!5e0!3m2!1svi!2s!4v1657504163239!5m2!1svi!2s"
                        width="100%" height="320px" frameborder="0" allowfullscreen="allowfullscreen" aria-hidden="false" tabindex="0"
                        style="border:0;" data-v-a4233176="">
                    </iframe>
                    <h3 style="color: tomato;">Công ty cổ phần xe khách Phương Trang FUTA Bus Lines</h3>
                    <p>Địa chỉ: Số 01 Tô Hiến Thành, Phường 3, Thành phố Đà Lạt, Tỉnh Lâm Đồng, Việt Nam.</p>
                    <p>Điện thoại: 028 3838 6852</p>
                    <p>Email: anhloideptrai@gmail.com</p>
                    <p>Tổng đài đặt vé: 1900 7059</p>
                </div>
            </div>
        </div>
    </div>
@endsection
