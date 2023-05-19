@extends('client.share.master')
@section('noi-dung')
<div class="container">
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
                <div class="col-md-7" style="border: 1px solid #d5d5d5;">
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
                                    <p style="line-height: 3px; font-weight: 700">BX Quy Nhơn</p>
                                    Bến xe Quy Nhơn, 71 đường Tây Sơn, KV 5, Phường Ghềnh Ráng, TP. Quy Nhơn
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-5">
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
</div>
@endsection
