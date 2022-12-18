<?php
    include 'file_handle_admin.php';

    if(empty($_COOKIE['admin_login_successful'])){
        header("Location: login.php");
    }

    if(isset($_GET['id_of_order'])){
        $result_of_detail_order=get_detail_order($_GET['id_of_order']);
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết</title>
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
            <p class="text-center">Chi tiết đơn hàng</p>
        </div>
        <!-- Table chi tiết đơn hàng -->
        <div class="row">
            <table class="table caption-top">
                <caption>Đơn hàng: #<?php if(isset($_GET['id_of_order'])){echo $_GET['id_of_order'];}?></caption>
                <thead>
                    <tr>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(isset($result_of_detail_order)){
                            foreach($result_of_detail_order as $value){
                    ?>
                        <tr>
                            <th scope="row"><?php echo $value['product_name'];?></th>
                            <td><?php echo number_format($value['price'],0,",",".")."đ";?></td>
                            <td><?php echo $value['amount'];?></td>
                            <td><?php echo number_format($value['thanhtien'],0,",",".")."đ";?></td>
                        </tr>

                    <?php }}?>
                    <!-- <tr>
                        <th scope="row">Black Link</th>
                        <td>3.200.000đ</td>
                        <td>12</td>
                        <td>15.000.000đ</td>
                    </tr> -->
                </tbody>
            </table>
        </div>
        
        <div class="row">
            Trạng thái đơn hàng: <?php if(isset($_GET['status_of_order'])){ echo $_GET['status_of_order']; }?>
        </div>
        <!-- form cập nhật trạng thái đơn -->
        <form action="" method="post">
            <select>
                <option selected disabled>Chọn trạng thái</option>
                <option value="Đang xử lý">Đang xử lý</option>
                <option value="Đang giao hàng">Đang giao hàng</option>
                <option value="Đã nhận hàng">Đã nhận hàng</option>
                <option value="Đã hủy">Đã hủy</option>
            </select>
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