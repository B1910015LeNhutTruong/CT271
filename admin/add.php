<?php 
    include 'file_handle_admin.php';
    include 'file_connect_pdo.php';

    if(empty($_COOKIE['admin_login_successful'])){
        header("Location: login.php");
    }

    //Lấy thông tin tất cả các category để hiển thị vào select
    $result_of_all_category=get_all_category();

    //Lấy data từ form và xử lý
    if(isset($_POST['btn_add_product_add'])){
        if(isset($_POST['name_product_add']) && isset($_POST['price_product_add']) && isset($_POST['category_product_add']) && isset($_POST['des_product_add']) && isset($_POST['color_product_add']) && isset($_POST['brand_product_add']) && isset($_FILES['img_product_add'])){
            $name_of_product=$_POST['name_product_add'];
            $price_of_product=$_POST['price_product_add'];
            $category_of_product=$_POST['category_product_add'];
            $des_of_product=$_POST['des_product_add'];
            $color_of_product=$_POST['color_product_add'];
            $brand_of_product=$_POST['brand_product_add'];
            $img_of_product=$_FILES['img_product_add'];

            //Xử lý file ảnh
            $check_status_upload_img=check_img_upload($img_of_product);

            if($check_status_upload_img=='success'){
                $sql="insert into product (product_name, price, category_id, description, color, brand, img) values (?,?,?,?,?,?,?)";
                $stmt=$conn->prepare($sql);
                $stmt->execute([$name_of_product,$price_of_product,$category_of_product,$des_of_product,$color_of_product,$brand_of_product,$img_of_product['name']]);
                echo '<script language="javascript">';
                echo 'alert("Thêm sản phẩm mới thành công !");'; 
                echo '</script>';
            }else{
                echo '<script language="javascript">';
                echo 'alert("'.$check_status_upload_img.'");';  
                echo '</script>';
            }
        }else{//phần else này dư do input đã có required
            echo '<script language="javascript">';
            echo 'alert("Bạn phải điền đầy đủ thông tin!");'; 
            echo '</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
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
    <main class="container" style="margin-top: 50px; margin-bottom: 100px;">
        <div class="row">
            <h3 class="text-center">CHASTAIN</h3>
            <p class="text-center">Thêm sản phẩm mới tại đây</p>
        </div>
        <div class="row">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name_product_add" class="form-label">Tên sản phẩm*</label>
                    <input type="text" name="name_product_add" class="form-control" id="name_product_add" required>
                </div>
                <div class="mb-3">
                    <label for="price_product_add" class="form-label">Giá bán*</label>
                    <input type="text" name="price_product_add" class="form-control" id="price_product_add" required>
                </div>
                <div class="mb-3">
                    <label for="category_product_add" class="form-label">Loại sản phẩm</label>
                    <select class="form-select" id="category_product_add" name="category_product_add" required>
                        <!-- <option value="1">Đồng hồ nam</option>
                        <option value="2">Đồng hồ nữ</option>
                        <option value="3">Phụ kiện</option> -->
                        <?php 
                            if(isset($result_of_all_category)){
                                foreach($result_of_all_category as $value){
                        ?>          
                                    <option value="<?php echo $value['id'];?>"><?php echo $value['category_name'];?></option>
                                
                        <?php }}?>
                        
                    </select>
                </div>
                <div class="mb-3">
                    <label for="des_product_add" class="form-label">Mô tả sản phẩm</label>
                    <textarea class="form-control" id="des_product_add" name="des_product_add" rows="4"></textarea required>   
                </div>
                <div class="mb-3">
                    <label for="color_product_add" class="form-label">Màu sắc*</label>
                    <input type="text" name="color_product_add" class="form-control" id="color_product_add" required>
                </div>
                <div class="mb-3">
                    <label for="brand_product_add" class="form-label">Thương hiệu*</label>
                    <input type="text" name="brand_product_add" class="form-control" id="brand_product_add" required>
                </div>
                <div class="mb-3">
                    <label for="img_product_add" class="form-label">Chọn hình ảnh minh họa*</label>
                    <input class="form-control" type="file" id="img_product_add" name="img_product_add" accept="image/png, image/jpeg" required>
                </div>
                <button type="submit" name="btn_add_product_add" class="btn btn-primary">Thêm sản phẩm</button>
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