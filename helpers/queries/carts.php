<?php // carts.php - functions to aid in the shopping cart process

// returns the id of the shopping cart for a given user
function get_shopping_cart($conn, $username) {
  $username = sanitize($conn, $username);

  $sql      = "SELECT Carts.ID FROM Carts JOIN Users ON
               UserID = Users.ID WHERE Username = '$username';";
  $result   = mysqli_query($conn, $sql);
  $cart     = mysqli_fetch_row($result);

  // make a new cart if one does not exist already
  if (empty($cart)) {
    insert_into_table($conn, 'Carts', 'UserID', 
                      [[get_user_id($conn, $username)]]);
    $result   = mysqli_query($conn, $sql);
    $cart     = mysqli_fetch_row($result);
  }

  return $cart[0];
}

// adds a given number of items to a shopping cart
function add_to_cart($conn, $cartID, $productID, $qty) {
  $schema = 'CartID, ProductID, Qty';
  $values = [[$cartID, $productID, $qty]];
  insert_into_table($conn, 'CartItems', $schema, $values);
}

// returns an array containing the contents in the cart
function get_cart($conn, $cartID) {
  $cartID = sanitize($conn, $cartID);
  $sql    = "SELECT ProductID, Qty, CartItems.ID FROM CartItems 
             JOIN Carts ON CartID = Carts.ID
             WHERE Carts.ID = $cartID;";
  $result = mysqli_query($conn, $sql);

  return mysqli_fetch_all($result);
}

// returns an array containing the contents of a users cart
function get_cart_by_username($conn, $username) {
  $id = get_shopping_cart($conn, $username);
  return get_cart($conn, $id);
}

// updates item quantity
function update_item_qty($conn, $id, $qty) {
  update_row($conn, 'CartItems', $id, ['Qty' => $qty]);
}

// removes all of an item from a shopping cart
function remove_from_cart($conn, $id) {
  $id = sanitize($conn, $id);

  delete_by_id($conn, 'CartItems', $id);
}

// emptys a given shopping cart
function empty_cart($conn, $cartID) {
  $cartID = sanitize($conn, $cartID);
  $sql    = "DELETE FROM CartItems WHERE CartID=$cartID;";

  mysqli_query($conn, $sql);
}

// totals a shopping cart
function print_total($conn, $cart) {
  $subtotal = calculate_subtotal($conn, $cart);
  $tax      = money_format('%.2n', $subtotal * .08);
  $total    = money_format('%.2n', $subtotal * 1.08);
  $subtotal = money_format('%.2n', $subtotal);
  include '../partials/total.php';
}

// calculates the subtotal of a shopping cart
function calculate_subtotal($conn, $cart) {
  if (empty($cart)) { return; }

  $subtotal = 0;
  foreach ($cart as $cart_item) {
    $id  = $cart_item[0];
    $qty = $cart_item[1];
    $subtotal += get_by_id($conn, 'Products', $id, 'Price')[0] * $qty;
  }

  return $subtotal;
}
