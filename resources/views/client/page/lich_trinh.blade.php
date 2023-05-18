@extends('client.share.master')
@section('noi-dung')
    <div class="container mt-2">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Tìm điểm đi...">
                    <button class="btn btn-outline-secondary" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Tìm điểm đến...">
                    <button class="btn btn-outline-secondary" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </div>
        <div class="scrow">
            <table  class="table table-bott mt-2" style="border: 1px solid #d5d5d5; background-color: #f6f6f6;">
                <thead>
                    <tr class="table-head">
                        <th>Tuyến xe</th>
                        <th>Loại xe</th>
                        <th>Quãng đường</th>
                        <th>Thời gian hành trình</th>
                        <th>Giá vé</th>
                        <th>Giờ chạy</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>

            <div class="group">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>An Nhơn =></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-head">
                            <td>TP Hồ Chí Minh</td>
                            <td>Giường</td>
                            <td>600 Km</td>
                            <td>12 giờ 46 phút</td>
                            <td><!------></td>
                            <td>
                                <button class="btn btn-success">Chi tiết</button>
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
                            <th>Bến Tre =></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-head">
                            <td>TP Hồ Chí Minh</td>
                            <td>Giường</td>
                            <td>600 Km</td>
                            <td>12 giờ 46 phút</td>
                            <td>300.000 vnd/1</td>
                            <td>
                                <button class="btn btn-success">Chi tiết</button>
                            </td>
                            <td>
                                <button class="btn btn-success">Đặt vé</button>
                            </td>
                        </tr>
                        <tr class="table-head">
                            <td>Đà Nẵng</td>
                            <td>Ghế</td>
                            <td>600 Km</td>
                            <td>10 giờ 50 phút</td>
                            <td>200.000 vnd/1</td>
                            <td>
                                <button class="btn btn-success">Chi tiết</button>
                            </td>
                            <td>
                                <button class="btn btn-success">Đặt vé</button>
                            </td>
                        </tr>
                        <tr class="table-head">
                            <td>Đà Nẵng</td>
                            <td>Ghế</td>
                            <td>600 Km</td>
                            <td>10 giờ 50 phút</td>
                            <td>200.000 vnd/1</td>
                            <td>
                                <button class="btn btn-success">Chi tiết</button>
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
                            <th>An Nhơn =></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-head">
                            <td>TP Hồ Chí Minh</td>
                            <td>Giường</td>
                            <td>600 Km</td>
                            <td>12 giờ 46 phút</td>
                            <td>300.000 vnd/1</td>
                            <td>
                                <button class="btn btn-success">Chi tiết</button>
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
                            <th>An Nhơn =></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-head">
                            <td>TP Hồ Chí Minh</td>
                            <td>Giường</td>
                            <td>600 Km</td>
                            <td>12 giờ 46 phút</td>
                            <td>300.000 vnd/1</td>
                            <td>
                                <button class="btn btn-success">Chi tiết</button>
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
                            <th>An Nhơn =></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-head">
                            <td>TP Hồ Chí Minh</td>
                            <td>Giường</td>
                            <td>600 Km</td>
                            <td>12 giờ 46 phút</td>
                            <td>300.000 vnd/1</td>
                            <td>
                                <button class="btn btn-success">Chi tiết</button>
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
                            <th>An Nhơn =></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-head">
                            <td>TP Hồ Chí Minh</td>
                            <td>Giường</td>
                            <td>600 Km</td>
                            <td>12 giờ 46 phút</td>
                            <td>300.000 vnd/1</td>
                            <td>
                                <button class="btn btn-success">Chi tiết</button>
                            </td>
                            <td>
                                <button class="btn btn-success">Đặt vé</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
