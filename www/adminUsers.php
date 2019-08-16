<?php
  $title = 'Users Administration';
  include '../helpers/multihelper.php'; 
  include '../helpers/admin.php';
  include '../partials/header.php'; ?>

<div class="big-red-box">
  <h1 class="big-text">Users</h1>  
  <h2>Click a user to modify their information or delete!</h2>
  <div class="browse">
<?php 
  forEach(get_users_with_access_levels($conn) as $user) { 
    userAdmin($user); } ?>
  </div>
</div> 
<?php include '../partials/footer.php'; ?>

