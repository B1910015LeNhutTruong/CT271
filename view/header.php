<!-- done -->
<?php 
    if(isset($_COOKIE["remember_username_login"]) && isset($_COOKIE["remember_email_login"]) && isset($_COOKIE["remember_phone_number_login"]) && isset($_COOKIE["remember_password_login"])){
        $_SESSION['remember_username_login']=$_COOKIE["remember_username_login"];
        $_SESSION['remember_email_login']=$_COOKIE["remember_email_login"];
        $_SESSION['remember_phone_number_login']=$_COOKIE["remember_phone_number_login"];
        $_SESSION['remember_password_login']=$_COOKIE["remember_password_login"];
    }
    $result_of_all_category=get_all_category();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="../view/css/style.css" type="text/css">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div id="main_header" class="container">
            <div class="row">
                <a class="col-sm-3 d-block mb-3" href="?action=home"><img id="logo_header" src="../view/img/chaistain_logo.png" alt=""></a>
                <div class="col-sm-9">
                    <div class="d-flex align-items-center justify-content-end" style="height: 100%">
                        <form id="form_search_product_header" action="#" method="get" class="d-flex align-items-center justify-content-around"><!-- bổ sung action  -->
                            <input type="hidden" name="action" value="search_product">
                            <input id="search_input_header" name="search_input_header" type="text" placeholder="Tìm sản phẩm ...">
                            <button class="btn" id="search_btn_header" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <div id="icon_user_header" class="icon_header">
                            <i id="icon_user" class="fas fa-user"></i>
                            <ul id="login_register_header">
                                <?php if(isset($_SESSION['remember_username_login']) && isset($_SESSION['remember_email_login']) && isset($_SESSION['remember_phone_number_login'])){
                                    echo '<li><a id="login_header" href="../controller/index.php?action=account_info">'.$_SESSION['remember_username_login'].'</a></li>';
                                    echo '<li><a id="register_header" href="../controller/index.php?action=logout">Đăng xuất</a></li>';
                                }else{ ?>

                                <li><a id="login_header" href="../controller/index.php?action=login">Đăng nhập</a></li><!-- bổ sung href  -->
                                <li><a id="register_header" href="../controller/index.php?action=register">Đăng ký</a></li><!-- bổ sung href  -->
                                <?php }?>
                            </ul>
                        </div>
                        <div id="icon_shopping_bag_header" class="icon_header">
                            <a href="?action=cart"><i class="fas fa-shopping-bag"></i></a><!-- bổ sung href  -->
                            <span id="count_product_header"> <?php if(isset($_SESSION['cart'])){echo count($_SESSION['cart']);}else echo "0";?> </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="cover_nav">
            <nav class="navbar navbar-expand-lg container">
                <button id="btn_toogle" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav w-100 justify-content-center">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="../controller/index.php?action=home" <?php if(isset($_GET['action']) && $_GET['action']=='agree_order'){ echo 'style="pointer-events: none;"';} if(isset($_GET['action']) && $_GET['action']=='home'){echo 'style="color: white;"';}?>>TRANG CHỦ</a>
                    </li>
                    <li class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" <?php if(isset($_GET['action']) && $_GET['action']=='agree_order'){ echo 'style="pointer-events: none;"';} if(isset($_GET['action']) && $_GET['action']=='list_product'){echo 'style="color: white;"';}?>>
                            SẢN PHẨM<!-- bổ sung href  -->
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="../controller/index.php?action=list_product&id_of_category=all">Tất cả sản phẩm</a></li>
                            <?php 
                                if(isset($result_of_all_category)){
                                    foreach($result_of_all_category as $value){
                            ?>            
                                <li><a class="dropdown-item" href="../controller/index.php?action=list_product&id_of_category=<?php echo $value['id'];?>"><?php echo $value['category_name']?></a></li>
                            <?php }}?>
                            <!-- <li><a class="dropdown-item" href="../controller/index.php?action=list_product&id_of_category=1">Đồng hồ nam</a></li>
                            <li><a class="dropdown-item" href="../controller/index.php?action=list_product&id_of_category=2">Đồng hồ nữ</a></li>
                            <li><a class="dropdown-item" href="../controller/index.php?action=list_product&id_of_category=3">Phụ kiện</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="../controller/index.php?action=about" <?php if(isset($_GET['action']) && $_GET['action']=='agree_order'){ echo 'style="pointer-events: none;"';} if(isset($_GET['action']) && $_GET['action']=='about'){echo 'style="color: white;"';}?>>GIỚI THIỆU</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="../controller/index.php?action=news" <?php if(isset($_GET['action']) && $_GET['action']=='agree_order'){ echo 'style="pointer-events: none;"';} if(isset($_GET['action']) && $_GET['action']=='news'){echo 'style="color: white;"';}?>>TIN TỨC</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="../controller/index.php?action=contact" <?php if(isset($_GET['action']) && $_GET['action']=='agree_order'){ echo 'style="pointer-events: none;"';} if(isset($_GET['action']) && $_GET['action']=='contact'){echo 'style="color: white;"';}?>>LIÊN HỆ</a>
                    </li>
                </ul>
                </div>
            </nav>
        </div>    
    </header>
