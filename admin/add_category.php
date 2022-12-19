<?php
    include 'file_handle_admin.php';
    include 'file_connect_pdo.php';

    if(empty($_COOKIE['admin_login_successful'])){
        header("Location: login.php");
    }

    if(isset($_POST['btn_add_category_add_category'])){
        if(isset($_POST['name_category_add_category'])){
            if(check_name_category($_POST['name_category_add_category'])>0){
                echo '<script>alert("Tên loại sản phẩm đã bị trùng!")</script>';
            }else{
                $sql="insert into category (category_name) values (?)";
                $stmt=$conn->prepare($sql);
                $stmt->execute([$_POST['name_category_add_category']]);
                echo '<script>alert("Thêm loại sản phẩm thành công!")</script>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm loại sản phẩm mới</title>
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
                    <a id="btn_back_show_all_product" href="show_all_product.php">CHASTAIN</a>
                </div>
                <div class="col-sm-6">
                    <a id="btn_login" href="logout.php">Đăng xuất</a>
                </div>
            </div>
        </div>
    </header>
    <!-- header dùng chung -->
    <main id="test" class="container" style="margin-top: 50px; margin-bottom: 100px;">
        <div class="row">
            <h3 class="text-center">CHASTAIN</h3>
            <p class="text-center">Thêm sản phẩm mới tại đây</p>
        </div>
        <div class="row">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="mb-3">
                    <label for="name_category_add_category" class="form-label">Tên loại sản phẩm*</label>
                    <input type="text" name="name_category_add_category" class="form-control" id="name_category_add_category" required>
                </div>
                <button id="btn_add_category_add_category" name="btn_add_category_add_category" type="submit">Thêm</button>
            </form>
        </div>
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