<?php include_once("components/header.php") ?>
<div>
    <?php include_once("components/navbar.php") ?>
    <div class="container">
        <div class="row">
            <?php include_once("components/category.php") ?>
            <div class="col-lg-9">
                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="/carouselExampleIndicators" data-slide-to='0' class="active" />
                        <li data-target="/carouselExampleIndicators" data-slide-to='1' />
                        <li data-target="/carouselExampleIndicators" data-slide-to='2' />
                    </ol>
                    <div class="carousel-inner" style="height: 350px" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="https://hoanghamobile.com/tin-tuc/wp-content/uploads/2018/02/T2-T%E1%BA%BFt-Sale-t%E1%BB%95ng-fb-Ads-803x420.png" alt="First slide" />
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://www.mobiistar.vn/wp-content/uploads/2015/10/banner800x400.jpg" alt="Second slide" />
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="http://www.techone.vn/image/cache/data/thuy/anh-banner-qc/pk-mua-3-tang-1.png" alt="Third slide" />
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true" />
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true" />
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="row">
                    <div>
                        <section class="page-section jumbotron" id="contact">
                            <div class="container">
                                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Chi tiết sản phẩm</h2>
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <div class="row">
                                    <?php include_once("components/product-detail.php") ?>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include_once("components/footer.php") ?>