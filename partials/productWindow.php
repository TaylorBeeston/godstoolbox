<div class="item-window hoverpointer" 
     onclick='window.location = "<?php echo "product.php?id=$id"; ?>"'>
  <span>$<?php echo $price; ?></span>
  <h1><?php echo $name; ?></h1>
  <img src="<?php echo "images/products/$id.jpg"; ?>" alt="<?php echo $name; ?>" />
  <p><?php echo $desc; ?></p>
</div>
