<script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
<?php
if (isset($_SESSION["username"]))
    header("location:index.php");
?>
<?php include_once("components/header.php") ?>
<div>
    <?php include_once("components/navbar.php") ?>

    <?php 
        include_once("models/Products.php");
        include_once("models/Category.php");
        $lsProducts = Products::getListProductsFromDB();
    ?>
    <div class="container">
    
        <div style="min-height:78vh">
            <br>
            <h1 class="display-3">Add Product</h1> <br>
            <form action="addProduct.php" method="post" enctype="multipart/form-data">
                <label for="name">Name: </label> 
                <input type="text" name="name" id="name"> <br><br>

                <label for="price">Price: </label> 
                <input type="number" name="price" id="price"> <br><br>

                <label for="category">Category: </label> 
                <select style="display: block !important;" class="form-control" name="category">
                    <?php foreach (Category::getListCategoryFromDB() as $key => $value) {?>
                    <option value="<?php echo $value->id?>"><?php echo $value->name?></option>
                    <?php } ?>
                </select> <br>

                <label for="desc">Mô tả ngắn: </label> 
                <input type="text" name="desc" id="desc"> <br><br>

                <label for="star">Star: </label> <br>
                <input type="number" min="1" max="5" name="star" id="star"> <br><br>

                <label for="image">Image: </label> <br>
                <input type="file"  name="fileAvatar" id="fileAvatar"> <br><br>
                
                <br>
                <label for="content">Mô tả đầy đủ: </label> <br>
                <br>
                <textarea name="description" id="description" ></textarea>
                <button class="btn btn-info"  type="submit" >Add product</button>
                
            </form>

        </div>
        <!-- /.row -->

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
    CKEDITOR.replace( 'description', {
    height: 300,
    filebrowserUploadUrl: "upload.php"
  });
</script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
</body>

</html>