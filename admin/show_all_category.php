<?php 
    include 'file_handle_admin.php';

    if(empty($_COOKIE['admin_login_successful'])){
        header("Location: login.php");
    }

    $result_of_all_category=get_all_category();

    if(isset($_GET['delete_category']) && isset($_GET['id_of_category'])){
        delete_product_of_a_category($_GET['id_of_category']);
        delete_category($_GET['id_of_category']);
        echo '<script>alert("Xóa loại sản phẩm thành công!")</script>';
        echo '<script>location.reload</script>';
    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý danh mục sản phẩm</title>
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
            <p class="text-center">Tất cả danh mục sản phẩm ở đây</p>
        </div>
        <div class="row mb-3">
            <a href="add_category.php"><button id="btn_add_category_show_all_category" class="btn btn-primary">Thêm loại sản phẩm mới</button></a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Tên danh mục</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(isset($result_of_all_category)){
                        $i=0;
                        foreach($result_of_all_category as $value){
                ?>
                    <tr>
                        <td><?php echo $value['category_name'];?></td>
                        <td>
                            <a href="edit_category.php?id_of_category_edit_category=<?php echo $value['id'];?>&current_category_name=<?php echo $value['category_name'];?>"><button class="btn btn-info">Sửa</button></a>
                            
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php if(isset($i)){echo $i;}?>">Xóa</button>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop<?php if(isset($i)){echo $i;}?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel<?php if(isset($i)){echo $i;}?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel<?php if(isset($i)){echo $i;}?>">Xóa loại sản phẩm</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Khi đồng ý, loại sản phẩm và các sản phẩm thuộc loại này sẽ bị xóa
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                        <button type="button" class="btn btn-primary"><a href="?delete_category&id_of_category=<?php echo $value['id'];?>" style="text-decoration: none; color: #fff;">OK</a></button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php $i++;}}?>
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