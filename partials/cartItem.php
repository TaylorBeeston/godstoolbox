<div class="cart-item">
  <div>
    <form action="cart.php" method="post">
      <input type="hidden" name="remove" value="<?php echo $id ?>" />
      <input type="submit" value="X" id="remove-from-cart" />
    </form>
    <form action="cart.php" method="post">
      <input type="hidden" name="update" value="<?php echo $id ?>" />
      <input type="text" value="<?php echo $qty ?>" 
             name="qty" id="qty" onchange="this.form.submit()" />
    </form>
    <img src="<?php echo "images/products/$pid.jpg"; ?>" 
         alt="<?php echo $name; ?>" />
    <span><?php echo $name; ?></span>
  </div>
  <span><?php echo $price; ?></span>
</div>
