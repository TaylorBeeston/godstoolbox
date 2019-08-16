<form action="productUpdate.php" method="post" 
      enctype="multipart/form-data">
  <?php if (!empty($id)) { ?>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
  <?php } ?>
  <label for="name">Name</label>
  <input id="name" type="text" name="name" 
         <?php if (!empty($name)) { echo "value=\"$name\""; } ?> 
         required="required"/>

  <label for="image">Picture</label>
  <img <?php if (!empty($id)) { echo "src=\"images/products/$id.jpg\""; } ?> 
       <?php if (!empty($name)) { echo "alt=\"$name\""; } ?> 
       id="preview"/>
  <input type="file" name="image" accept="image/*" id="image"
         <?php if (empty($id)) { echo 'required="required"'; } ?> />

  <label for="desc">Description</label>
  <input id="desc" type="text" name="desc"
         <?php if (!empty($desc)) { echo "value=\"$desc\""; } ?> 
         required="required" />

  <label for="price">Price</label>
  <input id="price" type="text" name="price"
         <?php if (!empty($price)) { echo "value=\"$price\""; } ?> 
         required="required"/>

  <input type="submit" />
  <?php if (!empty($id))  
  echo "<a href=\"deleteProduct.php?id=$id\" class=\"delete-button\">
        Delete Product</a>"; ?>
</form>
<script type="text/javascript" src="scripts/image-preview.js"></script>
