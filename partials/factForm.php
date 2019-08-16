<form action="updateFact.php" method="post" 
      enctype="multipart/form-data">
  <?php if (!empty($id)) { ?>
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
  <?php } ?>
  <label for="fact">Fact</label>
  <textarea id="fact"name="fact" required="required" rows="15"><?php if (!empty($fact)) { echo $fact; } ?></textarea>
         

  <input type="submit" />
  <?php if (!empty($id))  
  echo "<a href=\"deleteFact.php?id=$id\" class=\"delete-button\">
        Delete Fact</a>"; ?>
</form>
<script type="text/javascript" src="scripts/image-preview.js"></script>
