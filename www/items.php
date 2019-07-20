<?php 
  include 'helpers/includes.php';
  include 'data/items.php';
  $item = $items[$_GET['id']];
  $title = $item['name'];
  include 'partials/header.php'; ?>
<div class="big-red-box">
  <h1 class="big-text"><?php print $title; ?></h1>
</div>
<div class="two-columns">
  <div class="main">
    <div class="browse">
      <div class="big-window">
        <img src="<?php print $item['img']; ?>" alt="<?php print $item['name']; ?>" />
        <p><?php print $item['desc']; ?></p>
        <span>$<?php print $item['price']; ?></span>
        <form action="cart.php" method="post" class="item-cart">
          <div class="add1">+</div>
          <div class="sub1">-</div>
          <input type="text" name="qty" id="qty" value="1" />
          <input type="hidden" name="itemid" value="<?php print $_GET['id']; ?>" />
          <input type="submit" value="Add to cart" />
        </form>
      </div>
    </div>
  </div>
  <div class="side hide-small">
    <h3>Suggested Products</h3>
    <?php smallWindow($items[rand(0, count($items))]); ?>
    <?php smallWindow($items[rand(0, count($items))]); ?>
  </div>
</div> 
<script src="scripts/add-to-cart.js"></script>
<?php include 'partials/footer.php'; ?>
