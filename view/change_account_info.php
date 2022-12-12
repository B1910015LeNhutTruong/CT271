<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/jquery-3.6.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
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
                <a href="">Thông tin và liên hệ</a>
                <div class="d-block mt-3">Đổi thông tin người dùng</div>
                <a href="" class="d-block mt-3">Đổi mật khẩu</a>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>