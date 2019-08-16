<?php
  $title = 'Administration';
  include '../helpers/multihelper.php'; 
  include '../helpers/admin.php';
  include '../partials/header.php'; ?>

<div class="big-red-box">
  <h1 class="big-text">Admin</h1>  
  <h2>Hello, what would you like to edit?</h2>
  <div>
    <a href="adminUsers.php" class="admin-button">Users</a>
    <a href="adminProducts.php" class="admin-button">Products</a>
  </div>
</div> 
<?php include '../partials/footer.php'; ?>
