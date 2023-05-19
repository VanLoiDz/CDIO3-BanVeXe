<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container">
        <a href="/?#">
            <img src="https://futabus.vn/_nuxt/img/logo-buslines-small.b4bfbf7.png" style="margin: 0 80px 0 20px; width: 200px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/?#">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/lich-trinh?#">Lịch trình</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/lien-he?#">Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/ve-chung-toi?#">Về chúng tôi</a>
                </li>
            </ul>
            <form class="d-flex">
            <button class="btn btn-outline-success" style="margin: 0 10px;" data-bs-toggle="modal" data-bs-target="#exampleModal">Đăng nhập</button>
                <button class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModal1">Đăng kí</button>
            </form>
        </div>
    </div>
</nav>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Đăng Nhập</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                            placeholder="Nhập Email của bạn">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Nhập mật khẩu của bạn">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal1">Đăng Kí</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">ĐĂNG NHẬP</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Đăng Kí</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                            placeholder="Nhập Email của bạn">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Nhập mật khẩu của bạn">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Xác nhận mật khẩu</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Nhập lại mật khẩu">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Đăng Nhập</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">ĐĂNG KÍ</button>
            </div>
        </div>
    </div>
</div>

<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/assets/image/xe1.jpg" class="d-block w-100" style="height: 350px" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/assets/image/xe2.png" class="d-block w-100" style="height: 350px" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/assets/image/xe3.jpg" class="d-block w-100" style="height: 350px" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/assets/image/benxebus.jpg" class="d-block w-100" style="height: 350px" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
