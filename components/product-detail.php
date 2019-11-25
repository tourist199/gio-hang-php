<?php 
    $item = Products::getProductById($_REQUEST["id"]);
?>

<div class="card h-100 col-11" style="margin: 0px auto; padding-top: 100px;">
    <div class="col-6" style="margin: 0px auto;"><img width="50%" class="card-img-top" src="https://cdn.tgdd.vn/Products/Images/42/87846/iphone-6s-plus-32gb-400x460.png" alt=""></div>
    <div class="card-body">
        <h4 class="card-title"><a href="product-detail.php?id=<?php echo $item->id?>"><?php echo $item->name?></a></h4>
        <h5>$ <?php echo $item->price?></h5>
        <p class="card-text"><?php echo $item->description?></p>
    </div>
    <div class="card-footer box-flex">
        <p style="color: rgb(241, 196, 15);">★ ★ ★ ★ ☆ </p>
        <a href="buy-product.php?id=<?php echo $item->id?>">
            <div class="btn btn-danger btn-muahang">Mua hàng</div>
        </a>
    </div>
</div>