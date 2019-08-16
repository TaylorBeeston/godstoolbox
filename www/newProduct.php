<?php
  $title = "New Product";
  include '../helpers/multihelper.php';
  include '../helpers/admin.php';
  include '../partials/header.php'; ?>

<div class="two-columns">
  <div class="main">
    <h1 class="big-text">New Product</h1>
    <div class="big-window">
      <?php productForm(); ?>
    </div>
  </div>
</div> 
<?php include '../partials/footer.php'; ?>
