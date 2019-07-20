<div class="cart-item">
  <div>
    <form action="cart.php" method="post">
      <input type="hidden" name="removeitem" value="<?php print $id ?>" />
      <input type="submit" value="X" id="remove-from-cart" />
    </form>
    <span><?php print $qty; ?></span>
    <img src="<?php print $citem['img']; ?>" alt="<?php print $citem['alt']; ?>" />
    <span><?php print $citem['name']; ?></span>
  </div>
  <span><?php print $price; ?></span>
</div>
