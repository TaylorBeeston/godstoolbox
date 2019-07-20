<?php session_start();
  // redirects unless user is admin
  ($_SESSION['username'] == 'admin') || header('Location: index.php');

  $title = 'Administration';

  include 'helpers/includes.php';
  include 'data/items.php';
  include 'partials/header.php'; ?>
<div class="big-red-box">
  <h1 class="big-text">Admin</h1>  
  <a href="newitem.php">Click here to add an item</a>
  <h2>Click an item to modify its information or delete!</h2>
  <div class="browse">
    <?php forEach($items as $id => $item) { itemAdmin($id, $item); } ?>
  </div>
</div> 
<?php include 'partials/footer.php'; ?>
