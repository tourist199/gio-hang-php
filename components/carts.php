<?php 
    
    $lsCarts = Cart::getListCarts();
    
?>
<div class="row">
    <div>
        <div class="jumbotron">
            <h2 class="page-section-heading  text-uppercase text-secondary mb-0">Giỏ hàng</h2>
            <section class="section">
                <div class="table-responsive">
                    <table class="table product-table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Sản Phẩm</th>
                                <th>Giá</th>
                                <th>Số Lượng</th>
                                <th>Tổng Cộng</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($lsCarts as $key => $value) { ?>
                            <tr>
                                <th scope="row"> <img src="<?php echo $value->image?>" alt="" class="img-fluid z-depth-0"></th>
                                <td>
                                    <h5><strong><?php echo $value->name?></strong></h5>
                                </td>
                                <td><?php echo $value->price?>$</td>
                                <td class="center-on-small-only"><span class="qty"><?php echo $value->quantity?> </span>
                                    <div class="btn-group radio-group" >
                                        <a href="change-quantity-cart.php?id=<?php echo $value->id?>&value=-1"><div type="button" class="btn btn-sm btn-primary btn-rounded waves-effect waves-light">—</div></a>
                                        <a href="change-quantity-cart.php?id=<?php echo $value->id?>&value=1"><div class="btn btn-sm btn-primary btn-rounded waves-effect waves-light">+</div></a>
                                    </div>
                                </td>
                                <td><?php echo intval($value->price)*intval($value->quantity)?>$</td>
                                <td><a href="delete-cart.php?id=<?php echo $value->id ?>"><div type="button" class="btn btn-sm btn-primary waves-effect waves-light">X</div></a> </td>
                            </tr>
                        <?php }?>
                            
                            <tr>
                                <td colspan="3"></td>
                                <td>
                                    <h4><strong>Tổng Tiền</strong></h4>
                                </td>
                                <td>
                                    <h4><strong><?php echo Cart::getTotalPriceCarts()?>$</strong></h4>
                                </td>
                                <td colspan="3"><a href="checkoutbill.php"> <div type="button" class="btn btn-primary waves-effect waves-light">Complete purchase<i class="fa fa-angle-right right"></i></div> </a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</div>