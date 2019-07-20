<?php session_start();
  // redirects unless user is admin
  ($_SESSION['username'] == 'admin') || header('Location: index.php');

  include 'helpers/includes.php';
  include 'data/items.php';

  $id    = count($items);
  $title = "New Product";

  include 'partials/header.php'; ?>
<div class="two-columns">
  <div class="main">
    <h1 class="big-text">New Product</h1>
    <div class="big-window">
      <?php itemForm($id); ?>
    </div>
  </div>
</div> 
<?php include 'partials/footer.php'; ?>
