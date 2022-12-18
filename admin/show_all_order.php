<?php 
    include 'file_handle_admin.php';
    $result_of_all_orders=get_all_order();

    if(empty($_COOKIE['admin_login_successful'])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đơn hàng</title>
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
            <p class="text-center">Tất cả đơn hàng ở đây</p>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Mã đơn</th>
                    <th scope="col">Người nhận</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tổng đơn</th>
                    <th scope="col">Hình thức thanh toán</th>
                    <th scope="col">Trạng thái</th>  
                </tr>
            </thead>
            <tbody>
                <?php if(isset($result_of_all_orders)){
                    foreach($result_of_all_orders as $value){
                ?>
                    <tr>
                        <td><a style="text-decoration: none;" href="detail_order.php?id_of_order=<?php echo $value['id'];?>&status_of_order=<?php echo $value['status'];?>">#<?php echo $value['id'];?></a></td>
                        <td>
                            <p><?php echo $value['full_name'];?></p>
                            <p><?php echo $value['phone_number'];?></p>
                        </td>
                        <td><?php echo $value['address'];?></td>
                        <td><?php echo $value['email'];?></td>
                        <td><?php echo number_format($value['total'],0,",",".")."đ";?></td>
                        <td><?php echo $value['payment'];?></td>
                        <td><?php echo $value['status'];?></td>
                    </tr>
                <?php }}?>
            </tbody>
        </table>        
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