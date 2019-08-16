<?php 
  $title = 'Browse All';
  include '../helpers/multihelper.php';
  include '../partials/header.php'; ?>
<div class="big-red-box">
  <h1 class="big-text">Browse All</h1>
</div>
<div class="two-columns">
  <div class="main">
    <div class="browse">
      <?php forEach(get_all($conn, 'Products') as $product) { 
              productWindow($product); } ?>
    </div>
  </div>
  <div class="side">
    <ul>
      <li>
        <h2>Suggest an item</h2>
        <p>To suggest a new item for us to sell, please visit our 
           <a href="suggestions.php">suggestions</a> page!</p>
      </li>
      <li>
        <h2>Contact Us</h2>
        <p>We'd love to hear your feedback! Drop us a note via our
           <a href="contact.php">Contact Us</a> page!</p>
      </li>
    </ul>
  </div>
</div> 
<?php include '../partials/footer.php'; ?>
