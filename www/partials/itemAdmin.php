<a class="item-window" href="<?php print "adminitem.php?id=$id"; ?>">
  <span>$<?php print $item['price']; ?></span>
  <h1><?php print $item['name']; ?></h1>
  <img src="<?php print $item['img']; ?>" alt="<?php print $item['name']; ?>">
  <p><?php print $item['desc']; ?></p>
</a>
