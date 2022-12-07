<!-- done -->
<title>Giỏ hàng</title>
<div id="breadcrumb_background">
    <p id="title_breadcrumb" class="text-center">GIỎ HÀNG</p>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="?action=home">Trang chủ</a></li>&nbsp;
            <li class="breadcrumb-item active" aria-current="page" style="color: #1097cf; font-weight: 600; font-size: 16px;">&nbsp;Giỏ hàng</li>
        </ol>
    </nav>
</div>
<main class="container">
    <div id="div_tag_cover_table_cart" class="table-responsive-xl">
        <table class="table table-borderless">
            <thead id="thead_cart" class="text-center">
                <tr>
                    <th scope="col">Xóa</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                </tr>
            </thead>
            <tbody id="tbody_cart" class="text-center">

                <?php if(isset($product_in_cart)){
                    $total_cart_value=0;
                    foreach($product_in_cart as $id => $value){
                        $total_cart_value+=($value['price']*$value['quantity']);
                ?>
                    <tr>
                        <td style="padding-top:50px;">
                            <a href="?action=delete_product_from_cart&id_of_product_in_cart=<?php echo $id;?>"><i class="fas fa-trash"></i></a><!-- bổ sung href xóa sp -->
                        </td>
                        <td>
                            <img src="<?php echo "../admin/upload/".$value['img'];?>" alt="">
                        </td>
                        <td style="padding-top:50px;">
                            <?php echo $value['product_name'];?>
                        </td>
                        <td style="padding-top:50px;">
                            <?php echo number_format($value['price'],0,",",".")."đ";?>
                        </td>
                        <td style="padding-top:50px;">
                            <div id="btn_change_quantity_cart" class="d-flex justify-content-around align-items-center">
                                <a href="?action=change_quantity&change_type=decrease&id_of_product_in_cart=<?php echo $id;?>&quantity=<?php echo $value['quantity'];?>">-</a>
                                <?php echo $value['quantity'];?>
                                <a href="?action=change_quantity&change_type=increase&id_of_product_in_cart=<?php echo $id;?>&quantity=<?php echo $value['quantity'];?>">+</a>
                            </div>
                        </td>
                        <td style="padding-top:50px;">
                            <?php echo number_format($value['quantity']*$value['price'],0,'','.')."đ";?>
                        </td>
                    </tr>
                <?php }};?>    
                <tr>
                    <td></td>
                    <td></td>
                    <td colspan="3"><h4 class="text-right">Tổng đơn hàng: </h4></td>
                    <td>
                        <h4><?php if(isset($total_cart_value)){echo number_format($total_cart_value,0,",",".")."đ";}?></h4>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <h3 class="mt-5 text-center fw-bolder">Mời bạn nhập thông tin nhận hàng</h3>

    <div class="row">
        <div class="col-lg"></div>
        <form id="form_info_customer_cart" class="col" action="?action=agree_order" method="post">
            <div class="mb-3">
                <label for="fullname_customer_cart" class="form-label">Họ và tên*</label>
                <input type="text" name="fullname_customer_cart" class="form-control" id="fullname_customer_cart" value="<?php if(isset($_SESSION['remember_username_login'])){ echo $_SESSION['remember_username_login'];}?>" required>
            </div>
            <div class="mb-3">
                <label for="email_customer_cart" class="form-label">Địa chỉ email*</label>
                <input type="email" name="email_customer_cart" class="form-control" id="email_customer_cart" aria-describedby="emailHelp" value="<?php if(isset($_SESSION['remember_email_login'])){ echo $_SESSION['remember_email_login'];}?>" required>
                <div id="emailHelp" class="form-text">Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất kỳ ai khác.</div>
            </div>
            <div class="mb-3">
                <label for="phone_number_customer_cart" class="form-label">Số điện thoại nhận hàng*</label>
                <input type="text" name="phone_number_customer_cart" class="form-control" id="phone_number_customer_cart" value="<?php if(isset($_SESSION['remember_phone_number_login'])){ echo $_SESSION['remember_phone_number_login'];}?>" required>
            </div>
            <div class="mb-3">
                <label for="address_customer_cart" class="form-label">Địa chỉ nhận hàng*</label>
                <input type="text" name="address_customer_cart" class="form-control" id="address_customer_cart" required>
            </div>
            <div class="mb-3">
                <label for="note_customer_cart" class="form-label">Ghi chú</label>
                <textarea class="form-control" name="note_customer_cart" id="note_customer_cart" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="payments_of_customer_cart" class="form-label">Hình thức thanh toán*</label>
                <select id="payments_of_customer_cart" class="custom-select custom-select-md mb-3" name="payments_of_customer_cart" required>
                    <option value="Thanh toán tiền mặt khi nhận hàng (COD)" selected>Thanh toán khi nhận hàng (COD)</option>
                    <option value="Thanh toán qua thẻ tín dụng">Thanh toán qua thẻ tín dụng</option>
                    <option value="Thanh toán chuyển khoản (Internet Banking)">Thanh toán chuyển khoản (Internet Banking)</option>
                </select> 
            </div>
            <input type="hidden" name="total_cart_value" value="<?php echo $total_cart_value;?>">
            <button type="submit" class="btn btn-primary" id="btn_agree_order_cart" name="btn_agree_order_cart">Đồng ý đặt hàng</button>
            <button class="btn btn-warning"><a style="text-decoration: none;" href="?action=home">Tiếp tục mua hàng</a></button>
        </form>
        <div class="col-lg"></div>
    </div>
</main>
