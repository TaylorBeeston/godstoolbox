<?php session_start();
  // redirects unless user is admin
  ($_SESSION['username'] == 'admin') || header('Location: index.php');

  include 'helpers/includes.php';
  include 'data/items.php';

  $id    = $_GET['id'];
  $item  = $items[$id];
  $title = $item['name'];

  include 'partials/header.php'; ?>
<div class="two-columns">
  <div class="main">
    <div class="big-window">
      <?php itemForm($id, $item); ?>
    </div>
  </div>
</div> 
<?php include 'partials/footer.php'; ?>
