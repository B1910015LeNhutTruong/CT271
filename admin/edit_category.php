<?php
    include 'file_handle_admin.php';

    if(empty($_COOKIE['admin_login_successful'])){
        header("Location: login.php");
    }

    if(isset($_POST['btn_edit_category_name'])){
        if(isset($_POST['id_of_category_edit_category']) && isset($_POST['name_category_edit']) && $_POST['name_category_edit']!=''){
            update_category_name($_POST['id_of_category_edit_category'], $_POST['name_category_edit']);
            echo '<script>alert("Cập nhật thông tin tên loại sản phẩm thành công!")</script>';
        }else{
            echo '<script>alert("Vui lòng nhập lại tên bạn muốn sửa!")</script>';
        }
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa danh mục sản phẩm</title>
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
    <main class="container" style="margin-top: 50px; margin-bottom: 100px">
        <div class="row">
            <h3 class="text-center">CHASTAIN</h3>
            <p class="text-center">Chỉnh sửa danh mục sản phẩm</p>
        </div>
        <div class="row mb-2">
            <a href="show_all_category.php"><button id="btn_back_edit_category">Quay lại</button></a>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="mb-3">
                <label class="form-label">Tên loại sản phẩm hiện tại</label>
                <input type="text" value="<?php if(isset($_GET['current_category_name'])){ echo $_GET['current_category_name']; }?>" class="form-control" readonly> 
                <label for="name_category_edit" class="form-label mt-2">Nhập lại tên mới cho loại sản phẩm</label>
                <input type="text" name="name_category_edit" class="form-control" id="name_category_edit">

                <input type="hidden" name="id_of_category_edit_category" value="<?php if(isset($_GET['id_of_category_edit_category'])){ echo $_GET['id_of_category_edit_category']; }?>">
            </div>
            <button type="submit" id="btn_edit_category_name" name="btn_edit_category_name">Cập nhật loại sản phẩm</button>
        </form>
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