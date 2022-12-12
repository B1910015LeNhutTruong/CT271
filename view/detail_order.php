<title>Chi tiết đơn hàng</title>
<div id="breadcrumb_background">
    <p id="title_breadcrumb" class="text-center">CHI TIẾT ĐƠN HÀNG</p>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="?action=home">Trang chủ</a></li>&nbsp;
            <li style="font-weight: 600;" class="breadcrumb-item"><a href="../controller/index.php?action=account_info">Thông tin của tôi</a></li>&nbsp;
            <li class="breadcrumb-item active" aria-current="page" style="color: #1097cf; font-weight: 600; font-size: 16px;">&nbsp;Chi tiết đơn hàng</li>
        </ol>
    </nav>
</div>
<main class="container">
    <div class="table-responsive-xl">
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

                <?php if(isset($result_detail_order)){
                    foreach($result_detail_order as $value){
                ?>
                    

                <tr>
                    <th scope="row"><?php echo $value['product_name'];?></th>
                    <td><?php echo number_format($value['price'],0,",",".")."đ";?></td>
                    <td><?php echo $value['amount'];?></td>
                    <td><?php echo number_format($value['price']*$value['amount'],0,",",".")."đ";?></td>
                </tr>
                <?php
                }}?>
<!--                 
                <tr>
                    <th scope="row">Black Link</th>
                    <td>3.200.000đ</td>
                    <td>12</td>
                    <td>15.000.000đ</td>
                </tr>
                <tr>
                    <th scope="row">Black Link</th>
                    <td>3.200.000đ</td>
                    <td>12</td>
                    <td>15.000.000đ</td>
                </tr> -->
                </tbody>
        </table>
    </div>
    <a href="../controller/index.php?action=account_info"><button id="btn_back_detail_order">Quay lại</button></a>       
</main>
