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

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="input-group" style="display: flex; flex-wrap: nowrap;">
                <input type="text" class="form-control" placeholder="Tìm điểm đi...">
                <button class="btn btn-outline-secondary" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group" style="display: flex; flex-wrap: nowrap;">
                <input type="text" class="form-control" placeholder="Tìm điểm đến...">
                <button class="btn btn-outline-secondary" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
    </div>
    <div class="scrow mt-3">
        <div class="group">
            <table class="table table-striped">
                <thead>
                    <tr style="background-color: #d5d5d5">
                        <th><b>Tuyến xe</b></th>
                        <th><b>Loại xe</b></th>
                        <th><b>Quãng đường</b></th>
                        <th><b>Thời gian hành trình</b></th>
                        <th><b>Giá vé</b></th>
                        <th><b>Giờ chạy</b></th>
                        <th><b>Action</b></th>
                    </tr>
                    <tr>
                        <th><b>An Nhơn =></b></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TP Hồ Chí Minh</td>
                        <td>Giường</td>
                        <td>600 Km</td>
                        <td>12 giờ 46 phút</td>
                        <td>300.000 vnd/1</td>
                        <td>
                            <a href="/chi-tiet" style="text-decoration: none; font-weight: 600; color: green">Chi tiết</a>
                        </td>
                        <td>
                            <button class="btn btn-success">Đặt vé</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><b>Bến Tre =></b></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TP Hồ Chí Minh</td>
                        <td>Giường</td>
                        <td>600 Km</td>
                        <td>12 giờ 46 phút</td>
                        <td>300.000 vnd/1</td>
                        <td>
                            <a href="/chi-tiet" style="text-decoration: none; font-weight: 600; color: green">Chi tiết</a>
                        </td>
                        <td>
                            <button class="btn btn-success">Đặt vé</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Đà Nẵng</td>
                        <td>Ghế</td>
                        <td>600 Km</td>
                        <td>10 giờ 50 phút</td>
                        <td>200.000 vnd/1</td>
                        <td>
                            <a href="/chi-tiet" style="text-decoration: none; font-weight: 600; color: green">Chi tiết</a>
                        </td>
                        <td>
                            <button class="btn btn-success">Đặt vé</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Đà Nẵng</td>
                        <td>Ghế</td>
                        <td>600 Km</td>
                        <td>10 giờ 50 phút</td>
                        <td>200.000 vnd/1</td>
                        <td>
                            <a href="/chi-tiet" style="text-decoration: none; font-weight: 600; color: green">Chi tiết</a>
                        </td>
                        <td>
                            <button class="btn btn-success">Đặt vé</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><b>An Nhơn =></b></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TP Hồ Chí Minh</td>
                        <td>Giường</td>
                        <td>600 Km</td>
                        <td>12 giờ 46 phút</td>
                        <td>300.000 vnd/1</td>
                        <td>
                            <a href="/chi-tiet" style="text-decoration: none; font-weight: 600; color: green">Chi tiết</a>
                        </td>
                        <td>
                            <button class="btn btn-success">Đặt vé</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><b>An Nhơn =></b></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TP Hồ Chí Minh</td>
                        <td>Giường</td>
                        <td>600 Km</td>
                        <td>12 giờ 46 phút</td>
                        <td>300.000 vnd/1</td>
                        <td>
                            <a href="/chi-tiet" style="text-decoration: none; font-weight: 600; color: green">Chi tiết</a>
                        </td>
                        <td>
                            <button class="btn btn-success">Đặt vé</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><b>An Nhơn =></b></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TP Hồ Chí Minh</td>
                        <td>Giường</td>
                        <td>600 Km</td>
                        <td>12 giờ 46 phút</td>
                        <td>300.000 vnd/1</td>
                        <td>
                            <a href="/chi-tiet" style="text-decoration: none; font-weight: 600; color: green">Chi tiết</a>
                        </td>
                        <td>
                            <button class="btn btn-success">Đặt vé</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th><b>An Nhơn =></b></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TP Hồ Chí Minh</td>
                        <td>Giường</td>
                        <td>600 Km</td>
                        <td>12 giờ 46 phút</td>
                        <td>300.000 vnd/1</td>
                        <td>
                            <a href="/chi-tiet" style="text-decoration: none; font-weight: 600; color: green">Chi tiết</a>
                        </td>
                        <td>
                            <button class="btn btn-success">Đặt vé</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
