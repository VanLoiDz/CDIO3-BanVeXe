@extends('client.share.master')
@section('noi-dung')
<div class="container mt-2">
    <div class="alert alert-primary" role="alert">
        <marquee behavior="" direction="">
            <b>Chào mừng </b> các bạn đang học lớp <i>CDIO 3</i>
        </marquee>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-check form-check-inline" style="margin: 7px 7px;">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1"><b>Một chiều</b></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2"><b>Khứ hồi</b></label>
                    </div>

                    <div class="row">
                        <div class="col-md-3 form-floating">
                            <input type="text" class="form-control" placeholder="điểm đi">
                            <label style="margin-left: 8px;">Điểm đi</label>
                        </div>
                        <div class="col-md-3 form-floating">
                            <input type="text" class="form-control" placeholder="điểm đến">
                            <label style="margin-left: 8px;">Điểm đến</label>
                        </div>
                        <div class="col-md-3 form-floating">
                            <input type="date" class="form-control" placeholder="điểm đến">
                            <label style="margin-left: 8px; color: black;">Ngày Đi</label>
                        </div>
                        <div class="col-md-3 form-floating">
                            <input type="date" class="form-control" placeholder="điểm đến">
                            <label style="margin-left: 8px; color: black;">Ngày Về</label>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-outline-success btn-lg">TÌM CHUYẾN XE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4 class="mt-4">Chuyến phổ biến</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4 card-hover">
                <a href="#" class="detail">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img style="height: 90px; width: 400px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTl7eS6vKRuA_frN7CMGpS_oX3QssRot-f5jDkSE71KO7hSSXjL"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Sài Gòn => Đà Lạt</h5>
                                <p class="card-text">
                                    <i class="fa-solid fa-location-dot" style="margin: 0 4px;"></i>
                                    310Km
                                </p>
                                <p class="card-text">
                                    <i class="fa-solid fa-clock" style="margin: 0 4px;"></i>
                                    8h
                                </p>
                                <p class="card-text">
                                    <i class="fa-solid fa-ticket" style="margin: 0 4px;"></i>
                                    300.000đ
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4 card-hover">
                <a href="#" class="detail">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img style="height: 90px; width: 400px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTl7eS6vKRuA_frN7CMGpS_oX3QssRot-f5jDkSE71KO7hSSXjL"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Sài Gòn => Đà Lạt</h5>
                                <p class="card-text"><i class="fa-solid fa-location-dot" style="margin: 0 4px;"></i>310Km</p>
                                <p class="card-text"><i class="fa-solid fa-clock" style="margin: 0 4px;"></i>8h</p>
                                <p class="card-text"><i class="fa-solid fa-ticket" style="margin: 0 4px;"></i>300.000đ</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4 card-hover">
                <a href="#" class="detail">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img style="height: 90px; width: 400px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTl7eS6vKRuA_frN7CMGpS_oX3QssRot-f5jDkSE71KO7hSSXjL"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Sài Gòn => Đà Lạt</h5>
                                <p class="card-text"><i class="fa-solid fa-location-dot" style="margin: 0 4px;"></i>310Km</p>
                                <p class="card-text"><i class="fa-solid fa-clock" style="margin: 0 4px;"></i>8h</p>
                                <p class="card-text"><i class="fa-solid fa-ticket" style="margin: 0 4px;"></i>300.000đ</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4 card-hover">
                <a href="#" class="detail">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img style="height: 90px; width: 400px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTl7eS6vKRuA_frN7CMGpS_oX3QssRot-f5jDkSE71KO7hSSXjL"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Sài Gòn => Đà Lạt</h5>
                                <p class="card-text"><i class="fa-solid fa-location-dot" style="margin: 0 4px;"></i>310Km</p>
                                <p class="card-text"><i class="fa-solid fa-clock" style="margin: 0 4px;"></i>8h</p>
                                <p class="card-text"><i class="fa-solid fa-ticket" style="margin: 0 4px;"></i>300.000đ</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4 card-hover">
                <a href="#" class="detail">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img style="height: 90px; width: 400px;" src="/assets/image/hohkdem.jpg"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Đà Nẵng => Hà Nội</h5>
                                <p class="card-text"><i class="fa-solid fa-location-dot" style="margin: 0 4px;"></i>745Km</p>
                                <p class="card-text"><i class="fa-solid fa-clock" style="margin: 0 4px;"></i>18h</p>
                                <p class="card-text"><i class="fa-solid fa-ticket" style="margin: 0 4px;"></i>360.000đ</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4 card-hover">
                <a href="#" class="detail">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img style="height: 90px; width: 400px;" src="/assets/image/hohkdem.jpg"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Đà Nẵng => Hà Nội</h5>
                                <p class="card-text"><i class="fa-solid fa-location-dot" style="margin: 0 4px;"></i>745Km</p>
                                <p class="card-text"><i class="fa-solid fa-clock" style="margin: 0 4px;"></i>18h</p>
                                <p class="card-text"><i class="fa-solid fa-ticket" style="margin: 0 4px;"></i>360.000đ</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4 card-hover">
                <a href="#" class="detail">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img style="height: 90px; width: 400px;" src="/assets/image/hohkdem.jpg"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Đà Nẵng => Hà Nội</h5>
                                <p class="card-text"><i class="fa-solid fa-location-dot" style="margin: 0 4px;"></i>745Km</p>
                                <p class="card-text"><i class="fa-solid fa-clock" style="margin: 0 4px;"></i>18h</p>
                                <p class="card-text"><i class="fa-solid fa-ticket" style="margin: 0 4px;"></i>360.000đ</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4 card-hover">
                <a href="#" class="detail">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img style="height: 90px; width: 400px;" src="/assets/image/hohkdem.jpg"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Đà Nẵng => Hà Nội</h5>
                                <p class="card-text"><i class="fa-solid fa-location-dot" style="margin: 0 4px;"></i>745Km</p>
                                <p class="card-text"><i class="fa-solid fa-clock" style="margin: 0 4px;"></i>18h</p>
                                <p class="card-text"><i class="fa-solid fa-ticket" style="margin: 0 4px;"></i>360.000đ</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="contai-center">
        <h1 class="title" style="color: tomato;">------------  FUTA - Chất lượng là Danh dự  -------------</h1>
    </div>

    <div class="sumary">
        <div style="display: flex; flex-direction: row;">
            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" style="width: 100px; height: 80px; object-fit: contain;" data-v-322ee1ea="">
                <g fill="none" fill-rule="evenodd">
                    <circle cx="40" cy="40" r="39.25" stroke="#F15A24" stroke-width="1.5"></circle>
                    <circle cx="40" cy="40" r="32" fill="#F15A24" fill-rule="nonzero" opacity=".2"></circle>
                    <g fill="#F15A24" fill-rule="nonzero">
                        <path
                            d="M28 43.143h-8.377c-.98.029-1.932-.322-2.66-.98-.505-.46-.903-1.025-1.166-1.656-.263-.909-.366-1.856-.304-2.8 0-.187 0-.444-.14-.584-.14-.14 0 0 0 0s.14-.373.164-.56v-1.796-4.924c.01-3.24 1.167-6.374 3.266-8.843 1.079-1.26 2.385-2.304 3.85-3.08.183-.125.424-.125.607 0 1.601 1.089 3.532 1.584 5.46 1.4 1.416-.07 2.786-.522 3.967-1.307.292-.21.687-.21.98 0 2.803 1.516 4.953 4.006 6.043 7 .635 1.636.952 3.379.933 5.134v8.843c.065 1.11-.332 2.198-1.096 3.006-.764.809-1.828 1.266-2.94 1.264L28 43.143zM28 17.523c-4.66-.164-8.31-4.065-8.167-8.726C19.715 4.154 23.358.282 28 .117c2.247.067 4.375 1.024 5.915 2.66 1.54 1.638 2.367 3.82 2.298 6.066.063 2.24-.767 4.414-2.308 6.042-1.54 1.628-3.665 2.577-5.905 2.638zM13.44 39.387H4.667c-1.148.038-2.202-.628-2.66-1.68-.214-.435-.318-.916-.304-1.4v-6.814c-.023-3.637 1.947-6.995 5.134-8.75.195-.14.458-.14.653 0 2.12 1.41 4.88 1.41 7 0 .222-.163.525-.163.747 0 .933.607.91.304.303 1.284-1.181 1.8-1.946 3.84-2.24 5.973-.175 2.025-.222 4.06-.14 6.09v4.783c0 .187 0 .467.28.514zM4.947 13.487c-.076-1.67.525-3.3 1.667-4.521s2.728-1.93 4.4-1.966c3.439.127 6.135 3 6.043 6.44.037 1.659-.586 3.264-1.732 4.463-1.147 1.2-2.723 1.894-4.382 1.93-1.638-.042-3.191-.736-4.317-1.927-1.125-1.191-1.73-2.781-1.68-4.42zM42.49 39.387h8.843c1.152.035 2.212-.629 2.684-1.68.202-.44.306-.917.303-1.4v-6.814c.023-3.637-1.947-6.995-5.133-8.75-.196-.14-.458-.14-.654 0-2.12 1.41-4.88 1.41-7 0-.222-.163-.524-.163-.746 0-.91.607-.91.304-.28 1.284 1.13 1.814 1.854 3.852 2.123 5.973.175 2.025.222 4.06.14 6.09v4.783c.023.187.023.467-.28.514zM51.007 13.487c0-2.168-1.157-4.17-3.034-5.254-1.877-1.084-4.19-1.084-6.066 0-1.877 1.083-3.034 3.086-3.034 5.254 0 3.35 2.716 6.066 6.067 6.066 3.35 0 6.067-2.716 6.067-6.066z"
                            transform="translate(12 18)"></path>
                    </g>
                </g>
            </svg>
            <div style="display: flex; flex-direction: column; padding: 0 8px;">
                <p style="font-size: 50px; font-weight: 700; color: #f15a24;">20M</p>
                <p style="font-size: 13px; font-weight: 700; color: #00613d; margin-bottom: 4px;">Hơn 20 triệu lượt khách</p>
                <p style="max-width: 224px; font-size: 13px; color: #637280; display: flex;">Phương Trang phục vụ hơn 20 triệu lượt khách/bình quân 1 năm trên toàn quốc</p>
            </div>
        </div>
        <div style="display: flex; flex-direction: row;">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80"
                viewBox="0 0 80 80" style="width: 100px; height: 80px; object-fit: contain;" data-v-322ee1ea="">
                <defs>
                    <path id="prefix__a"
                        d="M46.13 16.87l.023-.023-8.68-8.68L35 10.64l4.923 4.923c-2.193.84-3.756 2.94-3.756 5.437 0 3.22 2.613 5.833 5.833 5.833.84 0 1.61-.186 2.333-.49v16.824c0 1.283-1.05 2.333-2.333 2.333-1.283 0-2.333-1.05-2.333-2.333v-10.5C39.667 30.1 37.567 28 35 28h-2.333V11.667C32.667 9.1 30.567 7 28 7H14c-2.567 0-4.667 2.1-4.667 4.667V49h23.334V31.5h3.5v11.667C36.167 46.387 38.78 49 42 49s5.833-2.613 5.833-5.833V21c0-1.61-.653-3.08-1.703-4.13zM28 23.333H14V11.667h14v11.666zm14 0c-1.283 0-2.333-1.05-2.333-2.333 0-1.283 1.05-2.333 2.333-2.333 1.283 0 2.333 1.05 2.333 2.333 0 1.283-1.05 2.333-2.333 2.333z">
                    </path>
                </defs>
                <g fill="none" fill-rule="evenodd">
                    <circle cx="40" cy="40" r="39.25" stroke="#F15A24" stroke-width="1.5"></circle>
                    <circle cx="40" cy="40" r="32" fill="#F15A24" fill-rule="nonzero" opacity=".2"></circle>
                    <g transform="translate(12 12)">
                        <mask id="prefix__b" fill="#fff">
                            <use xlink:href="#prefix__a"></use>
                        </mask>
                        <g fill="#F15A24" mask="url(#prefix__b)">
                            <path d="M0 0H56V56H0z"></path>
                        </g>
                    </g>
                </g>
            </svg>
            <div style="display: flex; flex-direction: column; padding: 0 8px;">
                <p style="font-size: 50px; font-weight: 700; color: #f15a24;">250</p>
                <p style="font-size: 13px; font-weight: 700; color: #00613d; margin-bottom: 4px;">>Hơn 250 phòng vé, phòng hàng</p>
                <p style="max-width: 224px; font-size: 13px; color: #637280; display: flex;">Phương Trang có hơn 250 phòng vé, trạm trung chuyển, bến xe... trên toàn hệ thống</p>
            </div>
        </div>
        <div style="display: flex; flex-direction: row;">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60"
                viewBox="0 0 60 60" style="width: 100px; height: 80px; object-fit: contain;" data-v-322ee1ea="">
                <defs>
                    <path fill="#F15A24" id="ll8igysq3a"
                        d="M18.75 36.395c0 1.25.554 2.373 1.421 3.154v2.53c0 .782.64 1.421 1.421 1.421h1.421c.782 0 1.421-.64 1.421-1.421v-1.421h11.369v1.42c0 .783.64 1.422 1.42 1.422h1.422c.781 0 1.42-.64 1.42-1.421v-2.53c.868-.781 1.422-1.904 1.422-3.154v-14.21c0-4.974-5.088-5.685-11.369-5.685-6.28 0-11.368.71-11.368 5.684v14.21zm4.974 1.42c-1.18 0-2.132-.951-2.132-2.13 0-1.18.952-2.132 2.132-2.132 1.18 0 2.131.952 2.131 2.131 0 1.18-.952 2.132-2.131 2.132zm12.79 0c-1.18 0-2.132-.951-2.132-2.13 0-1.18.952-2.132 2.131-2.132 1.18 0 2.132.952 2.132 2.131 0 1.18-.952 2.132-2.132 2.132zm2.13-8.526H21.593v-7.105h17.053v7.105z">
                    </path>
                </defs>
                <g fill="none" fill-rule="evenodd">
                    <circle cx="30" cy="30" r="30" fill="#F2754E"></circle>
                    <circle cx="30" cy="30" r="28.5" fill="#FFF" fill-rule="nonzero"></circle>
                    <circle cx="30" cy="30" r="24" fill="#FCDED3" fill-rule="nonzero"></circle>
                    <use fill="#F2754E" fill-rule="nonzero" xlink:href="#ll8igysq3a"></use>
                </g>
            </svg>
            <div style="display: flex; flex-direction: column; padding: 0 8px;">
                <p style="font-size: 50px; font-weight: 700; color: #f15a24;">1,600</p>
                <p style="font-size: 13px; font-weight: 700; color: #00613d; margin-bottom: 4px;">>Hơn 1,600 chuyến mỗi ngày</p>
                <p style="max-width: 224px; font-size: 13px; color: #637280; display: flex;">Phương Trang phục vụ hơn 1600 chuyến xe đường dài và liên tỉnh mỗi ngày</p>
            </div>
        </div>
    </div>

</div>
@endsection
