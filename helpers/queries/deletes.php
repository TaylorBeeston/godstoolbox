<?php // deletes.php - functions for deleting values from a MySQL database

// deletes the row with the specified id
function delete_by_id($conn, $table, $id) {
  $query = "DELETE FROM $table WHERE ID=$id;";

  mysqli_query($conn, $query);
}

// deletes a product
function delete_product($conn, $id) {
  // delete all cartitems that contain this product
  $sql    = "SELECT ID FROM CartItems WHERE ProductID = $id";
  $result = mysqli_query($conn, $sql);
  $items  = mysqli_fetch_all($result);

  foreach($items as $item)
    delete_by_id($conn, 'CartItems', $item[0]);

  // delete product
  delete_by_id($conn, 'Products', $id);
}

// deletes a user
function delete_user($conn, $id) {
  // delete their shopping cart(s)
  $sql    = "SELECT ID FROM Carts WHERE UserID = $id";
  $result = mysqli_query($conn, $sql);
  $carts  = mysqli_fetch_all($result);

  foreach($carts as $cart) {
    // delete all items in cart
    $sql    = "SELECT ID FROM CartItems WHERE CartID = {$cart[0]}";
    $result = mysqli_query($conn, $sql);
    $items  = mysqli_fetch_all($result);

    foreach($items as $item)
      delete_by_id($conn, 'CartItems', $item[0]);

    delete_by_id($conn, 'Carts', $cart[0]);
  }

  // delete user
  delete_by_id($conn, 'Users', $id);
}
