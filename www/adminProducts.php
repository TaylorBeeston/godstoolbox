<?php
  $title = 'Products Administration';
  include '../helpers/multihelper.php'; 
  include '../helpers/admin.php';
  include '../partials/header.php'; ?>

<div class="big-red-box">
  <h1 class="big-text">Products</h1>  
  <a href="newProduct.php">Click here to add an item</a>
  <h2>Click a product to modify its information or delete!</h2>
  <div class="browse">
    <?php forEach(get_all($conn, 'Products') as $product) { 
            productAdmin($product); } ?>
  </div>
</div> 
<?php include '../partials/footer.php'; ?>
