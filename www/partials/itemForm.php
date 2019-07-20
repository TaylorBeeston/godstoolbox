<form action="controllers/itemUpdate.php" method="post">
  <input type="hidden" name="itemid" value="<?php print $id; ?>" />
  <label for="name">Name</label>
  <input id="name" type="text" name="name" value="<?php print $item['name'] ?>" 
         required="required"/>

  <label for="image">Picture</label>
  <img src="<?php print $item['img'] ?>" alt="<?php print $item['name'] ?>" 
       id="preview"/>
  <input type="file" name="image" accept="image/*" id="image"
         required="required" />

  <label for="desc">Description</label>
  <input id="desc" type="text" name="desc" value="<?php print $item['desc'] ?>"
         required="required" />

  <label for="price">Price</label>
  <input id="price" type="text" name="price" value="<?php print $item['price'] ?>" 
         required="required"/>

  <span>This form currently does nothing and will redirect you to the home page</span>
  <input type="submit" />
</form>
<script src="scripts/image-preview.js"></script>
