<?php
  include '../helpers/multihelper.php';
  include '../helpers/admin.php';

  $product = get_by_id($conn, 'Products', $_GET['id']);
  $id    = $product[0];
  $name  = $product[1];
  $desc  = $product[2];
  $price = $product[3];
  $title = $name;

  include '../partials/header.php'; ?>
<div class="two-columns">
  <div class="main">
    <div class="big-window">
      <?php productForm($product); ?>
    </div>
  </div>
</div> 
<?php include '../partials/footer.php'; ?>
