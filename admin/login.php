<?php 
    session_start();
    include 'file_handle_admin.php';
    $status_login_admin=login_admin();
    if($status_login_admin=='ok'){
        header("Location: show_all_product.php");
    }
    if($status_login_admin=='no'){
        echo '<script language="javascript">';
        echo 'alert("Đăng nhập thất bại, vui lòng thử lại!");'; 
        echo '</script>';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header dùng chung -->
    <header>
        <div class="container">
            <div class="row align-items-center" style="height: 50px;">
                <div class="col-sm-6">
                    <a id="btn_back_show_all_product" href="#">CHASTAIN</a>
                </div>
                <div class="col-sm-6">
                    <a id="btn_login" href="#">Login</a>
                </div>
            </div>
        </div>
    </header>
    <!-- header dùng chung -->
    
    <main style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <form class="col" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"><!-- bổ sung action -->
                    <div class="mb-3">
                        <label for="user_login" class="form-label">User*</label>
                        <input type="text" name="user_login" class="form-control" id="user_login">
                    </div>
                    <div class="mb-3">
                        <label for="password_login" class="form-label">Mật khẩu*</label>
                        <input type="password" name="password_login" class="form-control" id="password_login">
                    </div>
                    <button type="submit" name="btn_login" class="btn btn-primary">Submit</button>
                </form>
                <div class="col-3"></div>
            </div>
        </div>
        <hr>
    </main>

    <!-- footer dùng chung -->
    <footer>
        <p class="container text-center">Copyright © 2022, Chastain Powered by B1910015</p>  
    </footer>
    <!-- footer dùng chung -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>
</body>

</html>