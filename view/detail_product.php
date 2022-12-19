<!-- done -->
<title>Chi tiết sản phẩm</title>
<div id="breadcrumb_background">
    <p id="title_breadcrumb" class="text-center">CHI TIẾT SẢN PHẨM</p>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="?action=home">Trang chủ</a></li>&nbsp;
            <li style="font-weight: 600;" class="breadcrumb-item"><a href="?action=list_product&id_of_category=<?php if(isset($id_of_category)){echo $id_of_category;}?>"><?php echo $name_of_category;?></a></li>&nbsp;
            <li class="breadcrumb-item active" aria-current="page" style="color: #1097cf; font-weight: 600; font-size: 16px;">&nbsp;<?php echo $detail_of_product['product_name'];?></li>
        </ol>
    </nav>
</div>

<main class="container mt-5">
    <div class="row">
        <div class="col-md-6 mb-3">
            <img id="img_detail_product" src="<?php echo "../admin/upload/".$detail_of_product['img'];?>" alt="">
        </div>
        <div id="contain_detail_product" class="col-md-6 mb-3">
            <h2 id="name_of_detail_product"><?php echo $detail_of_product['product_name'];?></h2>
            <p id="brand_of_detail_product"><?php echo $detail_of_product['brand'];?></p>
            <i class="far fa-clock"></i>
            <hr>
            <p id="price_of_detail_product" class="text-center"><span><?php echo number_format($detail_of_product['price'],0,",",".")."đ";?></span></p>
            <p><?php echo $detail_of_product['description'];?></p>
            
            <form id="form_add_into_cart" method="post" class="row mt-5" action="?action=cart">
                <div class="col-3">
                    <label for="amount_product_detail_product" style="color: #1097cf; font-size: 16px; font-weight: 600;" >Số lượng</label>
                </div>    
                <div class="col-9">
                    <input type="number" id="amount_product_detail_product" class="col-7 mx-sm-3" min="1" name="quantity" value="1">
                </div>
                <input type="hidden" name="id_of_product" value="<?php echo $detail_of_product['id'];?>">
                <button type="submit" id="btn_add_into_cart" name="btn_add_into_cart" class="btn">Thêm vào giỏ hàng</button>
            </form>
            <hr>
            <div id="service_detail_product" class="row">
                <div class="col-md-6 mt-3">
                    <img src="https://bizweb.dktcdn.net/100/438/171/themes/836357/assets/icon_service_product_1.svg?1665539904835" alt="">
                    <span>Giao hàng toàn quốc</span>
                </div>
                <div class="col-md-6 mt-3">
                    <img src="https://bizweb.dktcdn.net/100/438/171/themes/836357/assets/icon_service_product_2.svg?1665539904835" alt="">
                    <span>Thanh toán nhiều hình thức</span>
                </div>
                <div class="col-md-6 mt-3">
                    <img src="https://bizweb.dktcdn.net/100/438/171/themes/836357/assets/icon_service_product_3.svg?1665539904835" alt="">
                    <span>Cam kết đổi trả hàng miễn phí</span>
                </div>
                <div class="col-md-6 mt-3">
                    <img src="https://bizweb.dktcdn.net/100/438/171/themes/836357/assets/icon_service_product_4.svg?1665539904835" alt="">
                    <span>Hàng chính hãng/Bảo hành 1 năm</span>
                </div>
            </div>
        </div>
    </div>
</main>
