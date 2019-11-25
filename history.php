<?php
if (isset($_SESSION["username"]))
  header("location:index.php");
?>
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
        
        <?php include_once("components/bills.php") ?>

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
</body>

</html>