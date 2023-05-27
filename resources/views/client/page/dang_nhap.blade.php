@extends('client.share.master')
@section('noi-dung')
<section class="container stylization maincont">
    <ul class="b-crumbs">
        <li>
            <a href="/">
                Trang Chủ
            </a>
        </li>
        <li>
            <span>Đăng Kí / Đăng Nhập</span>
        </li>
    </ul>
    <h1 class="main-ttl"><span>Đăng Kí / Đăng Nhập</span></h1>
    <div class="auth-wrap">
        <div class="auth-col">
            <h2>Đăng Nhập</h2>
            <form method="post" class="login">
                <p>
                    <label for="username">Email <span class="required">*</span></label><input type="text"
                        id="username">
                </p>
                <p>
                    <label for="password">Mật Khẩu <span class="required">*</span></label><input type="password"
                        id="password">
                </p>
                <p class="auth-submit">
                    <input type="submit" value="Đăng Nhập">
                    <input type="checkbox" id="rememberme" value="forever">
                    <label for="rememberme">Nhớ Mật Khẩu</label>
                </p>
                <p class="auth-lost_password">
                    <a href="#">Quên Mật Khẩu?</a>
                </p>
            </form>
        </div>
        <div class="auth-col">
            <h2>Đăng Kí</h2>
            <form method="post" class="register">
                <p>
                    <label for="reg_email">Email <span class="required">*</span></label><input type="email"
                        id="reg_email">
                </p>
                <p>
                    <label for="reg_password">Mật Khẩu <span class="required">*</span></label><input
                        type="password" id="reg_password">
                </p>
                <p>
                    <label for="reg_password">Nhập Lại Mật Khẩu <span class="required">*</span></label><input
                        type="password" id="reg_password">
                </p>
                <p class="auth-submit">
                    <input type="submit" value="Đăng Kí">
                </p>
            </form>
        </div>
    </div>
</section>
@endsection
