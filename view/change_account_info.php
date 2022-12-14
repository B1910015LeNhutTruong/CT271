<title>Nhựt Trường</title>
<div id="breadcrumb_background">
    <p id="title_breadcrumb" class="text-center">THAY ĐỔI THÔNG TIN TÀI KHOẢN</p>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="?action=home">Trang chủ</a></li>&nbsp;
            <li class="breadcrumb-item active" aria-current="page" style="color: #1097cf; font-weight: 600; font-size: 16px;">&nbsp;Thay đổi thông tin</li>
        </ol>
    </nav>
</div>
<main class="container">
    <div class="row">
        <div id="nav_account_info" class="col-md-3">
            <a href="?action=account_info">Thông tin và liên hệ</a>
            <div class="d-block mt-3">Đổi thông tin người dùng</div>
            <a href="?action=change_password" class="d-block mt-3">Đổi mật khẩu</a>
        </div>
        <div id="change_account_info" class="col-md-8 offset-md-1">
            <h3>Đổi thông tin tài khoản</h3>   
            <form action="?action=change_account_info" method="post">
                <div class="mb-3">
                    <label for="full_name_change_account_info" class="form-label">Họ tên</label>
                    <input type="text" class="form-control" id="full_name_change_account_info" name="full_name_change_account_info" value="<?php if(isset($_SESSION['remember_username_login'])){ echo $_SESSION['remember_username_login'];}?>">
                </div>
                <div class="mb-3">
                    <label for="phone_number_change_account_info" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" id="phone_number_change_account_info" name="phone_number_change_account_info" value="<?php if(isset($_SESSION['remember_phone_number_login'])){ echo $_SESSION['remember_phone_number_login'];}?>">
                </div>
                <button type="submit" class="btn btn-primary" name="btn_change_account_info">Cập nhật</button>
            </form>
        </div>            
    </div>
</main>
