<?php
if (isset($_SESSION["username"]))
    header("location:index.php");
?>
<?php include_once("components/header.php") ?>
<div>
    <?php include_once("components/navbar.php") ?>

    <?php include_once("models/Products.php") ;
        $lsProducts = Products::getListProductsFromDB();
    ?>
    <div class="container">
        <div class="row">

            <h1 class="col-12" style="margin-top:30px;">Products Manager</h1>

            <div class="card shadow mb-4 col-12">

                <div class="card-header py-3">
                    <a class="m-0 font-weight-bold text-primary" href="add-product.php">
                        <i class="fas fa-fw fa-plus-circle"></i>
                        <span>Thêm sản phẩm</span>

                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Nội dung</th>
                                    <th>Ảnh</th>
                                    <td>Thao tác</td>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($lsProducts as $key => $value) {?>
                                    <tr>
                                        <td>
                                            <?php echo $value->id?>
                                        </td>
                                        <td>
                                            <?php echo $value->name?>
                                        </td>
                                        <td>
                                            <?php echo $value->desc?>
                                        </td>
                                        <td> <img height="100px" src="<?php echo $value->image?>" alt=""> </td>
                                        <td>
                                            <a href="edit-product.php?id=<?php echo $value->id ?>" class="" title="Edit" data-toggle="tooltip"><i class="far fa-edit"></i></a>
                                            <a href="deleteProduct.php?id=<?php echo $value->id ?>" class="" title="Delete" data-toggle="tooltip"><i class="far fa-trash-alt"></i></a>
                                        </td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <footer class="footer text-center" style="margin-top: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">2215 John Daniel Drive<br>Clark, MO 65243</p>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Around the Web</h4><a class="btn btn-outline-light btn-social mx-1" href="/"><i class="fab fa-fw fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1" href="/"><i class="fab fa-fw fa-twitter"></i></a><a class="btn btn-outline-light btn-social mx-1" href="/"><i class="fab fa-fw fa-linkedin-in"></i></a><a class="btn btn-outline-light btn-social mx-1" href="/"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">About Freelancer</h4>
                    <p class="lead mb-0">Freelance is a free to use, MIT licensed Bootstrap theme created by<a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                </div>
            </div>
        </div>
    </footer>
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright © Your Website 2019</p>
        </div>
    </footer>
</div>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
</body>

</html>