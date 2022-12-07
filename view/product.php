<!-- done -->
<title>Sản phẩm</title>
<div id="breadcrumb_background">
    <p id="title_breadcrumb" class="text-center"><?php echo mb_strtoupper($name_of_category);?></p>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="?action=home">Trang chủ</a></li>&nbsp;
            <li class="breadcrumb-item active" aria-current="page" style="color: #1097cf; font-weight: 600; font-size: 16px;">&nbsp;<?php echo ucfirst($name_of_category);?></li>
        </ol>
    </nav>
</div>
<main class="container mt-3">
    <h3 class="text-center" id="title_product"><span><?php echo mb_strtoupper($name_of_category);?></span></h3>
    <div id="list_product" class="row mt-5">
        <?php 
            foreach ($list_of_product as $value){?>
                <div class="col-md-3 col-6 list_item_product">
                    <a href="?action=product_details&id_of_product=<?php echo $value['id']?>" class="d-block">
                        <img src="<?php echo "../admin/upload/".$value['img'];?>" alt="">
                    </a>
                    <a href="?action=product_details&id_of_product=<?php echo $value['id']?>" class="d-block text-center mt-3"><?php echo $value['product_name'];?></a>
                    <p class="text-center"><?php echo number_format($value['price'],0,",",".")."đ";?></p>
                </div>
        <?php }?>
    </div>
</main>
