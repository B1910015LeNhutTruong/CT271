<?php 
    define("PATH_TO_CONNECT_DB","file_connect_pdo.php");

    function show_all_product(){
        include PATH_TO_CONNECT_DB;
        $sql="select * from product join category on product.category_id=category.id";
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        $result_of_all_product=$stmt->fetchAll();
        return $result_of_all_product;
    }
    
    function get_all_category(){
        include PATH_TO_CONNECT_DB;
        $sql="select * from category";
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        $result_of_all_category=$stmt->fetchAll();
        return $result_of_all_category;
    }

    function check_img_upload($img_of_product){
        $target_dir = "upload/";
        $target_file = $target_dir . basename($img_of_product["name"]);
        $upload_ok='success';
        //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($img_of_product["tmp_name"]);
        if($check !== false) {
            $upload_ok = 'success';
        } else {
            $upload_ok = "File không phải hình ảnh!";
        }
        
        // Check if file already exists
        if (file_exists($target_file)) {
            $upload_ok = 'Xin lỗi, hình ảnh đã tồn tại, vui lòng chọn ảnh khác!';
        }

        if ($upload_ok == 'success') {
            move_uploaded_file($img_of_product["tmp_name"], $target_file); //Tên tập tin, Đường dẫn tập tin
            
          // if everything is ok, try to upload file
        }
        // else{
        //     $upload_ok="Sorry, there was an error uploading your file.";
        // }
        return $upload_ok;
    }

    function delete_product($id_of_product){
        include PATH_TO_CONNECT_DB;
        $sql2="select * from product where id=?";
        $stmt2=$conn->prepare($sql2);
        $stmt2->execute([$id_of_product]);
        $result2=$stmt2->fetch();

        unlink('upload/'.$result2['img']);

        $sql="delete from product where id=?";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$id_of_product]); 
    }

    function login_admin(){
        include PATH_TO_CONNECT_DB;
        $login_status='';

        if(isset($_POST['btn_login'])){
            if(isset($_POST['user_login']) && isset($_POST['password_login'])){
                $email_admin_login=$_POST['user_login'];
                $password_admin_login=$_POST['password_login'];

                if($email_admin_login=="admin@gmail.com"){
                    $sql="select * from account where email=?";
                    $stmt=$conn->prepare($sql);
                    $stmt->execute([$email_admin_login]);

                    $result=$stmt->fetch();

                    if($stmt->rowCount()>0){
                        $password_hash_from_db=$result['pass_word']; 
                        if(password_verify($password_admin_login, $password_hash_from_db)){
                            $login_status='ok';
                            setcookie("admin_login_successful", 'ok', time() + 3600);
                        }else{
                            $login_status='no';
                        }
                    }else{
                        $login_status='no';
                    }
                }else{
                    $login_status='no';
                }
            }else{
                $login_status='no';
            }
        }
        return $login_status;
    }

    function get_data_product_from_db($id_of_product){
        include PATH_TO_CONNECT_DB;
        $sql="select * from product where id=?";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$id_of_product]);
        $result=$stmt->fetch();
        return $result;
    }
    
    function update_data_product($product_name, $price, $category_id, $description, $color, $brand, $id_of_product){
        include PATH_TO_CONNECT_DB;
        $sql="update product set product_name=?, price=?, category_id=?, description=?, color=?, brand=? where id=?";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$product_name, $price, $category_id, $description, $color, $brand, $id_of_product]);
    }

    function get_all_order(){
        include PATH_TO_CONNECT_DB;
        $sql="select * from orders";
        $stmt=$conn->prepare($sql);
        $stmt->execute();

        $result_of_all_orders=$stmt->fetchAll();
        return $result_of_all_orders;
    }

    function get_detail_order($id_of_order){
        include PATH_TO_CONNECT_DB;
        $sql="select * from order_detail where id_orders=?";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$id_of_order]);

        $result_of_detail_order=$stmt->fetchAll();
        return $result_of_detail_order;
    }

    function update_order_status($id_of_order, $status){
        include PATH_TO_CONNECT_DB;
        $sql="update orders set status=? where id=?";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$status, $id_of_order]);
        
    }

?>
