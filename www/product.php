<?php 
  include '../helpers/multihelper.php';

  $product = get_by_id($conn, 'Products', $_GET['id']);
  $id    = $product[0];
  $name  = $product[1];
  $desc  = $product[2];
  $price = $product[3];
  $title = $name;
 
  include '../partials/header.php'; ?>

<div class="big-red-box">
  <h1 class="big-text"><?php echo $name; ?></h1>
</div>
<div class="two-columns">
  <div class="main">
    <div class="browse">
      <div class="big-window">
        <img src="<?php echo "images/products/$id.jpg"; ?>" 
             alt="<?php echo $name; ?>" />
        <p><?php echo $desc; ?></p>
        <span>$<?php echo $price; ?></span>
        <form action="cart.php" method="post" class="item-cart">
          <input type="hidden" name="add" value="true" />
          <div class="add1">+</div>
          <div class="sub1">-</div>
          <input type="text" name="qty" id="qty" value="1" />
          <input type="hidden" name="productid" value="<?php echo $id; ?>" />
          <input type="submit" value="Add to cart" />
        </form>
      </div>
    </div>
  </div>
  <div class="side hide-small">
    <h3>Suggested Products</h3>
    <?php smallWindow(get_random($conn, 'Products', 'ID, Name, Price')); ?>
    <?php smallWindow(get_random($conn, 'Products', 'ID, Name, Price')); ?>
  </div>
</div> 
<script type="text/javascript" src="scripts/add-to-cart.js"></script>
<?php include '../partials/footer.php'; ?>
