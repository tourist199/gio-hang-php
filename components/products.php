<?php

if (isset($_REQUEST["category"]))
    $lsProducts = Products::getListProductsByCategory($_REQUEST["category"]);
else 
    $lsProducts = Products::getListProductsFromDB();

foreach ($lsProducts as $key => $value) {
    ?>

    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <a href="product-detail.php?id=<?php echo $value->id?>"> <img class="card-img-top" src="<?php echo $value->image?>" alt="" />
            </a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="product-detail.php?id=<?php echo $value->id?>"><?php echo $value->name?> </a> </h4>
                <h5>$ <?php echo $value->price?></h5>
                <p class="card-text"><?php echo $value->desc?></p>
            </div>
            <div class="card-footer box-flex">
                <p style="color: #f1c40f">★★★☆☆</p>
                <a href="buy-product.php?id=<?php echo $value->id?>">
                    <div class="btn btn-danger btn-muahang">Mua hàng</div>
                </a>
            </div>

        </div>
    </div>

<?php } ?>