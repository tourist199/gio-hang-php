<?php 
   $lsCategory = Category::getListCategoryFromDB();
?>

<div class="col-lg-3">
   <h1 class="my-4">CodersX</h1>
   <div class="list-group">
      <a class="list-group-item <?php if (!$_REQUEST["category"]) echo 'active' ?>" href="index.php">All</a>
      <?php
      foreach ($lsCategory as $key => $value) {
         ?>
         <a class="list-group-item <?php if ($_REQUEST["category"] && $_REQUEST["category"]==$value->id) echo 'active' ?>" href="index.php?category=<?php echo $value->id?>"><?php echo $value->name ?></a>
      <?php  } ?>
   </div>
</div>