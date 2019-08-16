<div class="small-window hoverpointer"
     onclick='window.location = "<?php echo "product.php?id=$id"; ?>"'>
  <div>
    <span>$<?php echo $price; ?></span>
    <h3><?php echo $name; ?></h3>
    <img src="<?php echo "images/products/$id.jpg"; ?>" 
         alt="<?php echo $name; ?>" />
  </div>
</div>
