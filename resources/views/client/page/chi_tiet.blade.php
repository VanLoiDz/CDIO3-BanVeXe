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

    <table class="table table-striped mt-2">
        <thead>
            <tr>
                <th>Bến xe & VP trung chuyển</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>An Nhơn</td>
                <td>02 Nguyễn Văn Linh, P.Bình Định, Tx.An Nhơn, Tỉnh Bình Định</td>
                <td>039432840</td>
            </tr>
        </tbody>
    </table>

    <div class="card">
        <div class="card-header" style="display: flex;">
            <p style="color: tomato;">BX An Nhon - BX An Suong</p>
            <p>- 660km - 12 giờ 46 phút</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6" style="border: 1px solid #d5d5d5;">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Giờ</td>
                                <td>Địa điểm</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bắt đầu</td>
                                <td>
                                    <div>
                                        <p style="line-height: 18px; font-weight: 700">BX Quy Nhơn</p>
                                    </div>

                                    <div>Bến xe Quy Nhơn, 71 đường Tây Sơn, KV 5, Phường Ghềnh Ráng, TP. Quy Nhơn</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" style="font-size: 15px">Ngày đi</label>
                        <div class="col-sm-10">
                          <input type="date" class="form-control">
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Giờ chạy</th>
                                <th>Giờ đến</th>
                                <th>Giá vé</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>17:30</td>
                                <td>06:16</td>
                                <td class="text-danger">5.000.000đ</td>
                                <td>
                                    <button class="btn btn-success">Đặt vé</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
