<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
   <div class="container">
      <a class="navbar-brand" href="/">Shop Mobile Online</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
            <a href="index.php">
               <li class="nav-item">
                  <p class="nav-link">Home</p>
               </li>
            </a>
            <?php
            if (isset($_SESSION["username"])) {
               ?>
               <a href="carts.php">
                  <li class="nav-item">
                     <p class="nav-link">Cart (<?php echo Cart::getAmountCarts() ?>)</p>
                  </li>
               </a>
               <a href="history.php">
                  <li class="nav-item">
                     <p class="nav-link">History</p>
                  </li>
               </a>
            <?php
            }
            ?>
            <a href="services.php">
               <li class="nav-item">
                  <p class="nav-link">Services</p>
               </li>
            </a>
            <a href="contact.php">
               <li class="nav-item">
                  <p class="nav-link">Contact</p>
               </li>
            </a>
            <a href="about.php">
               <li class="nav-item">
                  <p class="nav-link">About</p>
               </li>
            </a>
            <?php
            if (isset($_SESSION["username"])) {
               ?>
               <a href="admin-products.php">
                  <li class="nav-item">
                     <p class="nav-link">Products Manager</p>
                  </li>
               </a>
               <li class="nav-item">
                  <p class="nav-link">(Chào <?php echo $_SESSION["name"] ?>) <a href="logout.php">Logout</a></p>
               </li>
            <?php
            }
            ?>

            <?php
            if (!isset($_SESSION["username"])) {
               ?>
               <a href="login.php">
                  <li class="nav-item">
                     <p class="nav-link">Login</p>
                  </li>
               </a>
            <?php
            }
            ?>
         </ul>
      </div>
   </div>
</nav>