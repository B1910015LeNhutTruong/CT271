<!-- done -->
<?php
    if(isset($_COOKIE["remember_username_login"]) && isset($_COOKIE["remember_email_login"]) && isset($_COOKIE["remember_phone_number_login"])){
        setcookie('remember_username_login', $_COOKIE["remember_username_login"], time() - 3600);
        setcookie('remember_email_login', $_COOKIE["remember_email_login"], time() - 3600);
        setcookie('remember_phone_number_login', $_COOKIE["remember_phone_number_login"], time() - 3600);
        unset($_SESSION['remember_username_login']);
        unset($_SESSION['remember_email_login']);
        unset($_SESSION['remember_phone_number_login']);
    }else{
        if(isset($_SESSION['remember_username_login'])){
            unset($_SESSION['remember_username_login']);
        }
        if(isset($_SESSION['remember_email_login'])){
            unset($_SESSION['remember_email_login']);
        }  
        if(isset($_SESSION['remember_phone_number_login'])){
            unset($_SESSION['remember_phone_number_login']);
        }  
    }
?>
