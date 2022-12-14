<title><?php if(isset($_SESSION['remember_username_login'])){echo $_SESSION['remember_username_login'];}?></title>
<div id="breadcrumb_background">
    <p id="title_breadcrumb" class="text-center">ĐỔI MẬT KHẨU</p>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="?action=home">Trang chủ</a></li>&nbsp;
            <li class="breadcrumb-item active" aria-current="page" style="color: #1097cf; font-weight: 600; font-size: 16px;">&nbsp;Đổi mật khẩu</li>
        </ol>
    </nav>
</div>
<main class="container">
    <div class="row">
        <div id="nav_account_info" class="col-md-3">
            <a href="?action=account_info" class="d-block">Thông tin và liên hệ</a>
            <a href="?action=change_account_info" class="d-block mt-3">Đổi thông tin người dùng</a>
            <div class="mt-3">Đổi mật khẩu</div>
        </div>
        <div id="change_password" class="col-md-8 offset-md-1">
            <h3>Đổi mật khẩu</h3>
            <form id="form_change_password" action="?action=change_password" method="post">
                <div class="mb-3">
                    <label for="current_password_change_password" class="form-label">Mật khẩu hiện tại <span style="color: red;">*</span></label>
                    <input type="password" class="form-control" id="current_password_change_password" name="current_password_change_password">
                </div>
                <div class="mb-3">
                    <label for="new_password_change_password" class="form-label">Mật khẩu mới <span style="color: red;">*</span></label>
                    <input type="password" class="form-control" id="new_password_change_password" name="new_password_change_password">
                </div>
                <div class="mb-3">
                    <label for="repeat_password_change_password" class="form-label">Nhập lại mật khẩu <span style="color: red;">*</span></label>
                    <input type="password" class="form-control" id="repeat_password_change_password" name="repeat_password_change_password">
                </div>
                <button type="submit" id="btn_change_password" name="btn_change_password">Đổi mật khẩu</button>
            </form>
        </div>
    </div>
</main>
