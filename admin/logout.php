<?php
    if(isset($_COOKIE['admin_login_successful'])){
        setcookie("admin_login_successful",'ok',time() - 3600);
    }
    header("Location: login.php");
?>