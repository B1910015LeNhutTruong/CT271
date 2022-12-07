<!-- done -->
<title>Tìm kiếm</title>
<div id="breadcrumb_background">
    <p id="title_breadcrumb" class="text-center">KẾT QUẢ TÌM KIẾM</p>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="?action=home">Trang chủ</a></li>&nbsp;
            <li class="breadcrumb-item active" aria-current="page" style="color: #1097cf; font-weight: 600; font-size: 16px;">&nbsp;Tìm kiếm</li>
        </ol>
    </nav>
</div>
<main class="container">
    <h2>Tìm thấy <?php if(isset($result_search_product)){ 
                            echo count($result_search_product);
                        }else{ echo "0";} ?> 
    kết quả với từ khóa "<?php if(isset($_GET['search_input_header'])){
                                    echo $_GET['search_input_header'];
                                }
                        ?>"</h2>
    <div class="row mt-5">
        <?php if(isset($result_search_product)){
            foreach($result_search_product as $value){?>

                <div class="col-md-3 col-6 list_item_search_product">
                    <a href="?action=product_details&id_of_product=<?php echo $value['id']?>" class="d-block"> <!-- bổ sung href -->
                        <img src="<?php echo "../admin/upload/".$value['img'];?>" alt="">
                    </a>
                    <a href="?action=product_details&id_of_product=<?php echo $value['id']?>" class="d-block text-center mt-3"><?php echo $value['product_name'];?></a>
                    <p class="text-center"><?php echo number_format($value['price'],0,",",".")."đ";?></p>
                </div>
        <?php }}?>    
    </div>
</main>
