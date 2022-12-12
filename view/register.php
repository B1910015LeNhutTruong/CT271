<!-- done -->
<title>Đăng ký tài khoản</title>
<div id="breadcrumb_background">
    <p id="title_breadcrumb" class="text-center">ĐĂNG KÝ TÀI KHOẢN</p>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="?action=home">Trang chủ</a></li>&nbsp;
            <li class="breadcrumb-item active" aria-current="page" style="color: #1097cf; font-weight: 600; font-size: 16px;">&nbsp;Đăng ký tài khoản</li>
        </ol>
    </nav>
</div>
<main class="container">
    <h3 id="title_register" class="text-center">ĐĂNG KÝ TÀI KHOẢN</h3>
    <div class="row">
        <div class="col-lg"></div>
        <form class="col" id="form_register" method="post" action="#" style="padding: 20px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
            <div id="nav_form_login" class="row border-bottom">
                <div class="col text-center nav_login_register border-end"><a id="switch_login" href="?action=login">Đăng nhập</a></div><!-- bổ sung href  -->
                <div class="col text-center nav_login_register"><a style="color: black; pointer-events: none;" href="#">Đăng ký</a></div>
            </div>
            <div class="my-3">
                <label for="fullname_register" class="form-label">Họ tên</label>
                <input type="text" name="fullname_register" class="form-control" id="fullname_register">
            </div>

            <div class="mb-3">
                <label for="email_register" class="form-label">Email</label>
                <input type="email" name="email_register" class="form-control" id="email_register" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất kỳ ai khác.</div>
            </div>
            <div class="mb-3">
                <label for="phone_number_register" class="form-label">Số điện thoại</label>
                <input type="text" name="phone_number_register" class="form-control" id="phone_number_register">
            </div>
            <div class="mb-3">
                <label for="password_register" class="form-label">Mật khẩu</label>
                <input type="password" name="password_register" class="form-control" id="password_register">
            </div>
            <div class="mb-3">
                <label for="password_repeat_register" class="form-label">Nhập lại mật khẩu</label>
                <input type="password" name="password_repeat_register" class="form-control" id="password_repeat_register">
            </div>
            <button type="submit" name="btn_register" class="btn btn-primary d-block w-100">Tạo tài khoản</button>
        </form>
        <div class="col-lg"></div>
    </div>
</main>
