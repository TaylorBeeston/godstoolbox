<div class="item-window hoverpointer" 
     onclick='window.location = "<?php print $item['link']; ?>"'>
    <span>$<?php print $item['price']; ?></span>
    <h1><?php print $item['name']; ?></h1>
    <img src="<?php print $item['img']; ?>" alt="<?php print $item['name']; ?>" />
    <p><?php print $item['desc']; ?></p>
</div>
