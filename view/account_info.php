<title><?php echo $result_account_info[1];?></title> <!-- dùng php chèn title là tên full_name -->
<div id="breadcrumb_background">
    <p id="title_breadcrumb" class="text-center">THÔNG TIN TÀI KHOẢN</p>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="?action=home">Trang chủ</a></li>&nbsp;
            <li class="breadcrumb-item active" aria-current="page" style="color: #1097cf; font-weight: 600; font-size: 16px;">&nbsp;Thông tin của tôi</li>
        </ol>
    </nav>
</div>
<main class="container">
    <div class="row">
        <div id="nav_account_info" class="col-md-3">
            <div>Thông tin và liên hệ</div>
            <a href="?action=change_account_info" class="d-block mt-3">Đổi thông tin người dùng</a>
            <a href="?action=change_password" class="d-block mt-3">Đổi mật khẩu</a>
        </div>
        <div id="info_account_info" class="col-md-8 offset-md-1">
            <h3>Thông tin</h3>
            <div class="row mt-3">
                <div class="col-md-3">
                    Họ và tên <span style="color: red;">*</span>
                </div>
                <div class="col-md-9">
                    <?php echo $result_account_info['full_name'];?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3">
                    Địa chỉ email <span style="color: red;">*</span>
                </div>
                <div class="col-md-9">
                    <?php echo $result_account_info['email'];?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3">
                    Số điện thoại <span style="color: red;">*</span>
                </div>
                <div class="col-md-9">
                    <?php echo $result_account_info['phone_number'];?>
                </div>
            </div>
        </div>            
    </div>
    <div class="row mt-3">
        <h3 class="text-center">Các đơn hàng đã đặt</h3>
        <div class="table-responsive-xl" style="padding: 0px;">
            <table class="table table-bordered">
                <thead class="table-success">
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Tên người nhận</th>
                        <th>Địa chỉ nhận</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Tổng</th>
                        <th>Hình thức thanh toán</th>
                        <th>Trang thái</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        if(isset($result_all_orders)){
                            $i=0;
                            foreach($result_all_orders as $value){
                    ?> 
                    <tr>
                        <td><a style="text-decoration: none;" href="?action=detail_order&id_of_order=<?php echo $value['id'];?>">#<?php echo $value['id'];?></a></td>
                        <td> <?php echo $value['full_name'];?> </td>
                        <td> <?php echo $value['address'];?> </td>
                        <td> <?php echo $value['phone_number'];?> </td>
                        <td> <?php echo $value['email'];?> </td>
                        <td> <?php echo number_format($value['total'],0,",",".")."đ";?> </td>
                        <td> <?php echo $value['payment'];?> </td>
                        <td> <?php echo $value['status'];?> </td>
                        <td> 
                            <button type="button" <?php if(isset($value['status']) && $value['status']=='Đã hủy'){ echo "disabled";}?> class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $i;?>">Hủy</button> 
                            <div class="modal fade" id="staticBackdrop<?php echo $i;?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel<?php echo $i;?>" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel<?php echo $i;?>">Are you sure about that???</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Không</button>
                                        <button type="button" class="btn btn-primary"><a id="agree_cancel_order_account_info" href="../controller/index.php?action=account_info&agree_cancel_order&id_of_order_cancel=<?php echo $value['id'];?>">Ừm</a></button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php $i++;}}?>
                </tbody>
            </table>
        </div>    
    </div>
</main>
